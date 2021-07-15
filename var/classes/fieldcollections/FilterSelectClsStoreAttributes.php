<?php 

/** 
Fields Summary: 
- label [input]
- field [indexFieldSelection]
- scriptPath [input]
- excludedKeyIds [textarea]
- keyIdPriorityOrder [textarea]
*/ 


return Pimcore\Model\DataObject\Fieldcollection\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'FilterSelectClsStoreAttributes',
   'parentClass' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Model\\CategoryFilterDefinitionType',
   'implementsInterfaces' => NULL,
   'title' => '',
   'group' => 'FilterTypes',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Text::__set_state(array(
             'fieldtype' => 'text',
             'html' => '<b style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, helvetica, arial, verdana, sans-serif; font-size: 13px;">Filter Classification Store Attributes</b><div style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, helvetica, arial, verdana, sans-serif; font-size: 13px;"><font face="Open Sans, Helvetica Neue, helvetica, arial, verdana, sans-serif">- Elastic Search Only !</font></div><div style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, helvetica, arial, verdana, sans-serif; font-size: 13px;"><font face="Open Sans, Helvetica Neue, helvetica, arial, verdana, sans-serif">- Creates filters for all indexed Classification Store Attributes&nbsp;</font></div><div style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, helvetica, arial, verdana, sans-serif; font-size: 13px;"><font face="Open Sans, Helvetica Neue, helvetica, arial, verdana, sans-serif" style=""><span style="font-size: 13px;">- Excluded KeyIDs (CSV): CSV list of KeyIDs that should be excluded</span></font></div><div style=""><font face="Open Sans, Helvetica Neue, helvetica, arial, verdana, sans-serif" style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, helvetica, arial, verdana, sans-serif; font-size: 13px;">-&nbsp;</font><font face="Open Sans, Helvetica Neue, helvetica, arial, verdana, sans-serif"><span style="font-size: 13px;">KeyID Priority Order (CSV): CSV list of KeyIDs that should be listed first</span></font></div>',
             'renderingClass' => '',
             'renderingData' => '',
             'border' => false,
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => '',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => 'padding: 10px; background-color: #d9edf7; border-color: #bce8f1 !important; color: #31708f;',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => 400,
             'defaultValue' => NULL,
             'columnLength' => 255,
             'regex' => '',
             'unique' => NULL,
             'showCharCount' => NULL,
             'name' => 'label',
             'title' => 'Label',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => '',
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          2 => 
          Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ClassDefinition\IndexFieldSelection::__set_state(array(
             'fieldtype' => 'indexFieldSelection',
             'queryColumnType' => 
            array (
              'tenant' => 'varchar(100)',
              'field' => 'varchar(200)',
              'preSelect' => 'text',
            ),
             'columnType' => 
            array (
              'tenant' => 'varchar(100)',
              'field' => 'varchar(200)',
              'preSelect' => 'text',
            ),
             'width' => 400,
             'considerTenants' => true,
             'multiPreSelect' => 'none',
             'filterGroups' => 
            array (
              0 => 'classificationstore',
            ),
             'predefinedPreSelectOptions' => 
            array (
            ),
             'name' => 'field',
             'title' => 'Field',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => 400,
             'defaultValue' => NULL,
             'columnLength' => 255,
             'regex' => '',
             'unique' => false,
             'showCharCount' => false,
             'name' => 'scriptPath',
             'title' => 'Script Path',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => '',
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
             'fieldtype' => 'textarea',
             'width' => 400,
             'height' => 100,
             'maxLength' => NULL,
             'showCharCount' => false,
             'excludeFromSearchIndex' => false,
             'name' => 'excludedKeyIds',
             'title' => 'Excluded KeyIDs (CSV)',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
          )),
          5 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
             'fieldtype' => 'textarea',
             'width' => 400,
             'height' => 100,
             'maxLength' => NULL,
             'showCharCount' => false,
             'excludeFromSearchIndex' => false,
             'name' => 'keyIdPriorityOrder',
             'title' => 'KeyID Priority Order (CSV)',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'icon' => '',
         'labelWidth' => 100,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' => 
  array (
  ),
));
