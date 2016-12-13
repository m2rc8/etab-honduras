<?php

namespace MINSAL\IndicadoresBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class ClasificacionTecnicaiAdmin extends Admin
{
    protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'ASC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'descripcion' // name of the ordered field (default = the model id field, if any)
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
         ->with($this->getTranslator()->trans('_datos_generales_'))
            ->add('codigo', null, array('label'=> $this->getTranslator()->trans('codigo')))
            ->add('descripcion', null, array('label'=> $this->getTranslator()->trans('descripcion')))
            ->add('descripcionm', null, array('label'=> $this->getTranslator()->trans('descripcion en Matriz')))
            ->add('comentario', 'textarea', array('required'=>false, 'label'=> $this->getTranslator()->trans('comentario')))
            ->add('meta', 'number',  array('required'=>false, 'label'=> $this->getTranslator()->trans('meta')))
            ->add('clasificacionTecnicam', null, array('required'=>true, 'label'=> $this->getTranslator()->trans('clasificacion_tecnicam')))
           ->add('tipo', 'choice', array(
           'choices'  => array('Planificacion'=>'Planificacion','Produccion'=>'Produccion'),
           'multiple' => false, 'empty_value' => 'Seleccione valor'))
            ->add('ficha', null, array('empty_value' => 'Valor planificacion','required'=>false, 'label'=> $this->getTranslator()->trans('Ficha')))
            ->end()
->with($this->getTranslator()->trans('alertas'))
                ->add('alertas', 'sonata_type_collection', 
				array(				
                    'label' => $this->getTranslator()->trans('alertas'),
                    'required' => true), 
				array(
					'class'=>'form-control',
                    'edit' => 'inline',
                    'inline' => 'table',
                    'sortable' => 'position'									
                ))
                ->end()



;   
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('descripcion', null, array('label'=> $this->getTranslator()->trans('descripcion')))
            ->add('descripcionm', null, array('label'=> $this->getTranslator()->trans('descripcion en matriz')))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('descripcion', null, array('label'=> $this->getTranslator()->trans('descripcion')))
            ->addIdentifier('descripcionm', null, array('label'=> $this->getTranslator()->trans('descripcion en Matriz')))
            ->add('comentario', null, array('required'=>false, 'label'=> $this->getTranslator()->trans('comentario')))
        ;
    }
   
    public function validate(ErrorElement $errorElement, $object)
    {
        $piecesURL = explode("/", $_SERVER['REQUEST_URI']);
        $pieceAction = $piecesURL[count($piecesURL) - 1]; // create or update
        $pieceId = $piecesURL[count($piecesURL) - 2]; // id/edit
         
        $obj = new \MINSAL\IndicadoresBundle\Entity\ClasificacionTecnicai;
         
        $rowsRD = $this->getModelManager()->findBy('IndicadoresBundle:ClasificacionTecnicai',
                array('codigo' => $object->getCodigo()));
   
        if (strpos($pieceAction,'create') !== false) // entra cuando es ALTA
        {
            if (count($rowsRD) > 0){
                $errorElement
                ->with('codigo')
                ->addViolation($this->getTranslator()->trans('registro existente, no se puede duplicar'))
                ->end();
            }
        }
        else // entra cuando es EDICION
        {
            if (count($rowsRD) > 0){
                $obj = $rowsRD[0];
                if ($obj->getId() != $pieceId)
                {
                    $errorElement
                    ->with('codigo')
                    ->addViolation($this->getTranslator()->trans('registro existente, no se puede duplicar'))
                    ->end();
                }
            }
        }
    }

    public function getBatchActions()
    {
        $actions = parent::getBatchActions();
        $actions['delete'] = null;
    }
}