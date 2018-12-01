<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Event;
use AppBundle\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class EventController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $events = $this->getDoctrine()
            ->getRepository('AppBundle:Event')
            ->findAll();

        // Render Template
        return $this->render('default/index.html.twig', [
            'events' => $events
        ]);
    }

    /**
     * @Route("/event/filter/{cat}", name="event_filter")
     */
    public function filterAction($cat, Request $request)
    {
        $events = $this->getDoctrine()
            ->getRepository('AppBundle:Event')
            ->findBy(array('category' => $cat));

        // Render Template
        return $this->render('default/index.html.twig', [
            'events' => $events
        ]);
    }

    /**
     * @Route("/event/detail/{id}", name="event_detail")
     */
    public function detailAction($id, Request $request)
    {
        $event = $this->getDoctrine()
            ->getRepository('AppBundle:Event')
            ->find($id);

        // Render Template
        return $this->render('event/detail.html.twig', [
            'event' => $event
        ]);
    }

    /**
     * @Route("/events", name="event_list")
     */
    public function listAction(Request $request)
    {
        $events = $this->getDoctrine()
            ->getRepository('AppBundle:Event')
            ->findAll();

        // render Template
        return $this->render('event/index.html.twig', [
            'events' => $events
        ]);        
    }

    /**
     * @Route("/event/create", name="event_create")
     */
    public function createAction(Request $request)
    {
        $event = new Event;

        $form = $this->createFormBuilder($event)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('category', EntityType::class, array('class' => 'AppBundle:Category', 'choice_label' => 'name', 'attr' => array('class' => 'form-control mb-3')))
            ->add('day', DateTimeType::class, array('widget' => 'single_text', 'attr' => array('class' => 'form-control mb-3')))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('image', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('capacity', NumberType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('email', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('phone', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('locationName', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('adress', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('zip', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('city', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('url', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('save', SubmitType::class, array('label' => 'Create Event', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        // Handle Request
        $form->handleRequest($request);

        // Check Submit and validity
        if($form->isSubmitted() && $form->isValid()) {
            $name = $form['name']->getData();
            $category = $form['category']->getData();
            $day = $form['day']->getData();
            $description = $form['description']->getData();
            $image = $form['image']->getData();
            $capacity = $form['capacity']->getData();
            $email = $form['email']->getData();
            $phone = $form['phone']->getData();
            $locationName = $form['locationName']->getData();
            $adress = $form['adress']->getData();
            $zip = $form['zip']->getData();
            $city = $form['city']->getData();
            $url = $form['url']->getData(); 

            // Get Current Date and Time
            $now = new \DateTime('now');

            $event->setName($name);
            $event->setCategory($category);
            $event->setDay($day);
            $event->setDescription($description);
            $event->setImage($image);
            $event->setCapacity($capacity);
            $event->setEmail($email);
            $event->setPhone($phone);
            $event->setLocationName($locationName);
            $event->setAdress($adress);
            $event->setZip($zip);
            $event->setCity($city);
            $event->setUrl($url);
            $event->setCreateDate($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($event);
            $em->flush();

            $this->addFlash(
                'notice',
                'Event Saved'
            );

            return $this->redirectToRoute('event_list');
        }

        // Render Template
        return $this->render('event/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/event/edit/{id}", name="event_edit")
     */
    public function editAction($id, Request $request)
    {
        $event = $this->getDoctrine()
            ->getRepository('AppBundle:Event')
            ->find($id);

        if(!$event){
            throw $this->createNotFoundExeption(
                'No event found for id '.$id 
            );
        }

        $event->setName($event->getName());
        $event->setCategory($event->getCategory());
        $event->setDay($event->getDay());
        $event->setDescription($event->getDescription());
        $event->setImage($event->getImage());
        $event->setCapacity($event->getCapacity());
        $event->setEmail($event->getEmail());
        $event->setPhone($event->getPhone());
        $event->setLocationName($event->getLocationName());
        $event->setAdress($event->getAdress());
        $event->setZip($event->getZip());
        $event->setCity($event->getCity());
        $event->setUrl($event->getUrl());


        $form = $this->createFormBuilder($event)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('category', EntityType::class, array('class' => 'AppBundle:Category', 'choice_label' => 'name', 'attr' => array('class' => 'form-control mb-3')))
            ->add('day', DateTimeType::class, array('widget' => 'single_text', 'attr' => array('class' => 'form-control mb-3')))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('image', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('capacity', NumberType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('email', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('phone', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('locationName', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('adress', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('zip', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('city', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('url', TextType::class, array('attr' => array('class' => 'form-control mb-3')))
            ->add('save', SubmitType::class, array('label' => 'Update Event', 'attr' => array('class' => 'btn btn-warning')))
            ->getForm();

        // Handle Request
        $form->handleRequest($request);

        // Check Submit and validity
        if($form->isSubmitted() && $form->isValid()) {
            $name = $form['name']->getData();
            $category = $form['category']->getData();
            $day = $form['day']->getData();
            $description = $form['description']->getData();
            $image = $form['image']->getData();
            $capacity = $form['capacity']->getData();
            $email = $form['email']->getData();
            $phone = $form['phone']->getData();
            $locationName = $form['locationName']->getData();
            $adress = $form['adress']->getData();
            $zip = $form['zip']->getData();
            $city = $form['city']->getData();
            $url = $form['url']->getData(); 

            $em = $this->getDoctrine()->getManager();
            $event = $em->getRepository('AppBundle:Event')->find($id);
            
            $event->setName($name);
            $event->setCategory($category);
            $event->setDay($day);
            $event->setDescription($description);
            $event->setImage($image);
            $event->setCapacity($capacity);
            $event->setEmail($email);
            $event->setPhone($phone);
            $event->setLocationName($locationName);
            $event->setAdress($adress);
            $event->setZip($zip);
            $event->setCity($city);
            $event->setUrl($url);

            $em->flush();

            $this->addFlash(
                'notice',
                'Event Updated'
            );

            return $this->redirectToRoute('event_list');
        }

        // Render Template
        return $this->render('event/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/event/delete/{id}", name="event_delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('AppBundle:Event')->find($id);

        if(!$event) {
            throw $this->createNotFoundException(
                'No event found with id of '.$id 
            );
        }

        $em->remove($event);
        $em->flush();

        $this->addFlash(
            'notice',
            'Event deleted'
        );

        return $this->redirectToRoute('event_list');
       
    }
}
