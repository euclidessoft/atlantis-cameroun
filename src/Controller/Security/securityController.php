<?php

namespace App\Controller\Security;

use App\Entity\Album;
use App\Repository\ImageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\UserType;
use App\Form\changePasswordType;
use App\Repository\UserRepository;
use Symfony\Component\Form\FormError;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


/**
 * @Route("/{_locale}")
 */
class securityController extends AbstractController
{
    /**
     * @Route("/", name="Accueil")
     */
    public function accueil(Request $request)
    {
       return  $this->render('atlantis/accueil.twig');
    }
    /**
     * @Route("/about", name="About")
     */
    public function about(Request $request)
    {
        return  $this->render('atlantis/about.twig');
    }

    /**
     * @Route("/services/planning-design-and-construction", name="Planning")
     */
    public function planning(Request $request)
    {
        return  $this->render('atlantis/planning.twig');
    }

    /**
     * @Route("/services/improving-pipeline-development", name="Improve")
     */
    public function improve(Request $request)
    {
        return  $this->render('atlantis/improve.twig');
    }

    /**
     * @Route("/services/security-and-environmental-protection", name="Securite")
     */
    public function securite(Request $request)
    {
        return  $this->render('atlantis/securite.twig');
    }

    /**
     * @Route("/contact", name="Contact")
     */
    public function contact(Request $request)
    {
        return  $this->render('atlantis/contact.twig');
    }

    /**
     * @Route("/realisations", name="Realisations")
     */
    public function realisations(Request $request)
    {
        return  $this->render('atlantis/realisations.twig');
    }

    /**
     * @Route("/gallery/photo", name="Photo")
     */
    public function photo(Request $request)
        {
            return  $this->render('atlantis/photos.twig');
    }

    /**
     * @Route("/gallery/document", name="Document")
     */
    public function document(Request $request)
        {
            return  $this->render('atlantis/documents.twig');
    }

    /**
     * @Route("/gallery/photo/pipeline-4km", name="Pipeline-4km")
     */
    public function pipeline4km(Request $request)
        {
            return  $this->render('atlantis/pipeline-4km.twig');
    }

    /**
     * @Route("/gallery/photo/pipeline-4km/foncage", name="Foncage")
     */
    public function foncage(Request $request)
        {
            return  $this->render('atlantis/pipeline-4km-foncage.twig');
    }

    /**
     * @Route("/gallery/photo/pipeline-4km/gares-racleurs", name="Racleurs")
     */
    public function gares_racleurs(Request $request)
        {
            return  $this->render('atlantis/pipeline-4km-gares-racleurs.twig');
    }

    /**
     * @Route("/gallery/photo/reservoir-10000m3", name="Reservoir-10000")
     */
    public function reservoir_10000(Request $request)
        {
            return  $this->render('atlantis/reservoir-10000m3.twig');
    }

    /**
     * @Route("/gallery/photo/reservoir-10000m3/commission-de-reception-provisoire", name="Reception")
     */
    public function reception(Request $request)
        {
            return  $this->render('atlantis/reservoir-10000m3-commission-de-reception-provisoire.twig');
    }

    /**
     * @Route("/gallery/photo/reservoir-10000m3/inauguration-decembre2021", name="Inauguration")
     */
    public function inauguration(Request $request)
        {
            return  $this->render('atlantis/reservoir-10000m3-inauguration-decembre2021.twig');
    }

    /**
     * @Route("/gallery/photo/reservoir-10000m3/travaux-de-montage-du-reservoir", name="Montage")
     */
    public function montage(Request $request)
        {
            return  $this->render('atlantis/reservoir-10000m3-travaux-de-montage-du-reservoir.twig');
    }

    /**
     * @Route("/gallery/photo/reservoir-10000m3/visite-des-travaux", name="Visite")
     */
    public function visite(Request $request)
        {
            return  $this->render('atlantis/reservoir-10000m3-visite-des-travaux.twig');
    }

    /**
     * @Route("/gallery/photo/reservoir-dci", name="Reservoir-DCI")
     */
    public function reservoir_DCI(Request $request)
        {
            return  $this->render('atlantis/reservoir-DCI.twig');
    }

    /**
     * @Route("/gallery/photo/reservoir-jeta1", name="Reservoir-JET")
     */
    public function reservoir_JET(Request $request)
        {
            return  $this->render('atlantis/reservoir-JETA1.twig');
    }

    /**
     * @Route("/gallery/photo/revamping-des-tuyauteries", name="Revamping")
     */
    public function revamping(Request $request)
        {
            return  $this->render('atlantis/revamping.twig');
    }

    /**
     * @Route("/gallery/video", name="Video")
     */
    public function video(Request $request)
        {
            return  $this->render('atlantis/videos.twig');
    }
}
