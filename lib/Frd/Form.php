<?php
/*
 * @author fred<iamlosing02@gmail.com>
 *
 * form class for create form element easily, use zend form
 */
class Frd_Form
{
    protected $_output=false; //if true ,will echo directly ,otherwise only return the value

    function setOutput($output)
    {
        if($output == true) 
            $this->_output= true;
        else
            $this->_output=false;
    }

    function output($html)
    {
        if($this->_output == true) 
        {
            echo $html;
        }
        else
        {
            return $html;
        }
    }

    /*
     * output <br/>
     * this is very useful for test or  in working project,
     * and in form develop,before style designed, 
     * usualy need output form element for test,
     * and it is necessary
     */
    function br()
    {
        $html='<br/>';
        return $this->output($html); 
    }
    /*
     * form tag start <form ... >
     */
    function tag_start($params=array())
    {
        $attr=new Frd_Html_Attributes($params);     

        $html= '<form '.$attr->toHtml().'>';

        return $this->output($html);
    }
    /*
     * form tag end </form>
     */
    function tag_end()
    {
        $html= '</form>'; 
        return $this->output($html);
    }
	/*text*/
	function text($params)
	{
        $params['type']='text';
        $element=new Frd_Html_Element('input',$params);

		$html= $element->toHtml();


        return $this->output($html);
	}

	/*textarea*/
	function textarea($params)
	{
        if(isset($params['value']))
            $value=$params['value'];
        else
            $value='';

        $params['type']='text';
        $element=new Frd_Html_Element('textarea',$params);

        //special ,but it is text for textarea value
        $element->appendText($value);

		$html= $element->toHtml();
        return $this->output($html);
	}

  /*
   * password
   */
	function password($params)
	{
        $params['type']='password';
        $element=new Frd_Html_Element('input',$params);

		$html= $element->toHtml();
        return $this->output($html);
	}
  /*
   * hidden
   */
	function hidden($params)
	{
        $params['type']='hidden';
        $element=new Frd_Html_Element('input',$params);

		$html= $element->toHtml();
        return $this->output($html);
	}

  /*
   * select
   */
	function select($params,$options=array(),$selected=null)
	{
        $element=new Frd_Html_Element('select',$params);
        foreach($options as $value=>$text)
        {
            if($selected != false && $selected == $value)
                $element->add('option',array('value'=>$value,'selected'=>'selected'),$text);
            else
                $element->add('option',array('value'=>$value),$text);
        }

		$html= $element->toHtml();
        return $this->output($html);
	}
  /*
   *multi select
   */
	function multiselect($params,$options=array(),$selected=null)
	{
        $params['multiple']=null;
        $element=new Frd_Html_Element('select',$params);
        foreach($options as $value=>$text)
        {
            if(is_array($selected)  && in_array($value,$selected))
                $element->add('option',array('value'=>$value,'selected'=>'selected'),$text);
            else
                $element->add('option',array('value'=>$value),$text);
        }

		$html= $element->toHtml();
        return $this->output($html);
	}

  /*
   *radio 
   */
	function radio($params)
	{
        $params['type']='radio';
        $element=new Frd_Html_Element('input',$params);

		$html= $element->toHtml();
        return $this->output($html);
	}

	//复选按钮
	//会多出一个<input 需要去掉
  /*
   *checkbox 
   */
	function checkbox($params)
	{
        $params['type']='checkbox';
        $element=new Frd_Html_Element('input',$params);

		$html= $element->toHtml();
        return $this->output($html);
	}
  /*
   *file 
   */
	function file($params)
	{
        $params['type']='file';
        $element=new Frd_Html_Element('input',$params);

		$html= $element->toHtml();
        return $this->output($html);
	}
  /*
   *submit 
   */
	function submit($params)
	{
        $params['type']='submit';
        if(!isset($params['name']))
        {
            $params['name']='submit';
        }
        if(!isset($params['value']))
        {
            $params['value']='submit';
        }

        $element=new Frd_Html_Element('input',$params);

		$html= $element->toHtml();
        return $this->output($html);
	}
  /*
   *button 
   */
	function button($params)
	{
        $params['type']='button';
        $element=new Frd_Html_Element('input',$params);

		$html= $element->toHtml();
        return $this->output($html);
	}
}
