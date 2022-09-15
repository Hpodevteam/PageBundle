<?php

namespace Hippocampe\Bundle\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FileUploadController extends AbstractController
{
    /**
     * @Route("/admin/page-bundle/file-upload", name="admin_page_file_upload")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function upload(Request $request): RedirectResponse
    {
        /** @var UploadedFile $file */
        $file = $request->files->get('pageFileUpload');

        try {
            if ($file) {
                $filename = str_replace('_', '', $file->getClientOriginalName());
                $file->move('uploads/pages/files', $filename);
            }
        } catch (\Exception $exception) {
            $this->addFlash('danger', 'Suite à un problème technique le fichier n\'a pas pu être uploadé.');
        }

        $this->addFlash('success', 'Le fichier a bien été uploadé.');

        return $this->redirect($request->headers->get('referer'));
    }
}