<?php
/**
7.
 */

class Form
{
    public function input(array $attr)
    {
        $attr = $this->prepareAttr($attr);
        return '<input ' . $this->attr2Html($attr) . '>';
    }

    public function submit(array $attr)
    {
        $attr['type']='submit';
        return $this->input($attr);
    }

    public function password(array $attr)
    {
        $attr['type']='password';
        return $this->input($attr);

    }

    public function textarea(array $attr)
    {
        $attr = $this->prepareAttr($attr);
        if (isset($attr['value'])) {
            $value = htmlspecialchars($attr['value']);
            unset($attr['value']);
        } else {
            $value='';
        }
        return '<textarea ' . $this->attr2html($attr) . '>' . $value . '</textarea>';
    }

    public function open(array $attr)
    {
        return '<form ' . $this->attr2Html($attr) . '>';
    }

    public function close()
    {
        return '</form>';
    }

/* ['type'=>'text', 'value'=>'!!!']
*
 *
 * @param
*/
    protected function attr2html(array $attr)
    {
        $ret='';
        foreach($attr as $name=>$value){
            $ret .= $name . '="' .htmlspecialchars($value) . '"';
        }
        return trim($ret);
    }

    protected function prepareAttr(array $attr)
    {
        return $attr;
    }

}