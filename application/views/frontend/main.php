<link rel="stylesheet" href="<?=CDN?>/frontend/css/flexslider.css?vs=<?=time()?>" type="text/css" media="screen" />
<?=$this->load->widget('banner');?>
<?=$this->load->widget('feature_new');?>
<!--new-->
<?=$this->load->widget('featured_products');?>
<?php
if (isset($categorys) && count($categorys) > 0)
{
    $i=0;
    foreach ($categorys as $category)
    {
        echo  $this->load->widget('source_code',array('cid' => $category['id'],'title'=>$category['name']));

    }
}
?>