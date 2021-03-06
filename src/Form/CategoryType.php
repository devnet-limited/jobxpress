<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CategoryType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('name')
			->add('status', ChoiceType::class, [
				'required' => true,
				'choices'  => [
					'Active'    => 1,
					'Inactive'  => 0
				]
			])
			// ->add('created_by')
			// ->add('edited_by')
			// ->add('deleted_by')
			// ->add('created_at')
			// ->add('edited_at')
			// ->add('deleted_at')
		;
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => Category::class,
		]);
	}
}
