<?php
namespace Task\PostsBundle\Form\Post;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
class PostForm extends AbstractType
{
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Task\PostsBundle\Entity\posts',
        ));
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('content', 'textarea')       
            ->add('categoryID', 'entity', array(
                'class' => 'Task\PostsBundle\Entity\categories',
                'query_builder' => function(EntityRepository $categoriesRepository) { //get options 
                    return $categoriesRepository->createQueryBuilder('u');
                },
                'empty_value' => 'Choose category',  // defualt value
                'property' => 'name',
            ))
             ->add('publishDate', 'text')
            ->add('save', 'submit', array('label' => 'Create Post'));
    }
    public function getName()
    {
        return 'PostForm';
    }
}