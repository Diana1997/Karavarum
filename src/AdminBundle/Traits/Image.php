<?php

namespace AdminBundle\Traits;

use Symfony\Component\HttpFoundation\File\UploadedFile;

trait Image
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $srcImage;

    /**
     * @return mixed
     */
    public function getSrcImage()
    {
        return $this->srcImage;
    }

    /**
     * @param mixed $srcImage
     */
    public function setSrcImage($srcImage)
    {
        $this->srcImage = $srcImage;
    }

    protected function getUploadDirImage()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/images';
    }

    protected function getUploadRootDirImage()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../web/'.$this->getUploadDirImage();
    }

    public function getAbsolutePathImage()
    {
        return null === $this->srcImage
            ? null
            : $this->getUploadRootDirImage() . '/' . $this->srcImage;
    }

    /**
     * @Assert\NotBlank
     * @Assert\File(
     *          maxSize="20M",
     *          mimeTypes = {
     *              "image/png",
     *              "image/jpeg",
     *              "image/jpg",
     *              "image/gif",
     *          },
     *          mimeTypesMessage = "file.extension_error",
     *          maxSizeMessage = "file.size_error",
     * )
     */
    protected $image;

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @ORM\PrePersist
     */
    public function uploadImage()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getImage()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        $this->getImage()->move(
        // __DIR__.'/../../../web/uploads/documents/',
            $this->getUploadRootDirImage(),
            $this->getImage()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
        $this->srcImage = $this->getImage()->getClientOriginalName();
        // clean up the file property as you won't need it anymore
        $this->image = null;
    }

}
