<?php

namespace Book\ManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add('title')->add('description')->add('pages');
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults(array('data_class'=>'Book\ManagerBundle\Entity\Book'));
	}

	public function getName() {
		return 'book_managerbundle_book';
	}
}