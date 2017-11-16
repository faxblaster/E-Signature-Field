<?php

class E_signature_freeform_ft extends Freeform_base_ft
{
    public 	$info 	= array(
        'name'          => 'E-Signature',
        'version'       => '1.0',
        'description'   => 'Add an Electronic Signature'
    );


    // --------------------------------------------------------------------

    /**
     * Constructor
     *
     * @access	public
     * @return	null
     */

    public function __construct()
    {
        parent::__construct();

        $this->info['name']         = lang('E-Signature');
        $this->info['description']  = lang('Add an Electronic Signature');
    }

    //END __construct()


    public function validate($data) {
        return true;
    }
    // --------------------------------------------------------------------

    /**
     * Display Field
     *
     * @access	public
     * @param	string 	saved data input
     * @param  	array 	input params from tag
     * @param 	array 	attribute params from tag
     * @return	string 	display output
     */

    public function display_field ($data = '', $params = array(), $attr = array())
    {
        $fieldAttributes = array(
            'type' => 'hidden',
            'name'  => $this->field_name,
            'id'    => 'freeform_field_' . $this->field_id,
            'value' => $data,
            'class' => 'sigValue',
        );
        $fieldData = '<div id="signature">
                  <canvas width="300" height="200" border="1px solid black"></canvas>
                  <div class="controls">
                        <a class="btn" href="#" id="clearSig">Clear Canvas</a>
                  </div>
                </div>' . form_input($fieldAttributes);

        return $fieldData;
    }
    //END display_field


    // --------------------------------------------------------------------

    /**
     * Display Field Settings
     *
     * @access	public
     * @param	array
     * @return	string
     */

    public function display_settings($data = array())
    {
        return;
    }
    //END display_settings




    // --------------------------------------------------------------------

    // Composer Entry Settings

    public function display_composer_field($data = '')
    {
        return '<img src="assets/img/sample_e-signature.png" />';
    }
    //END display_composer_field


    // --------------------------------------------------------------------

    // Display Entry CP Settings

    public function display_entry_cp($data)
    {
        $entryView = '<img src="' . $data . '" />';
        return $entryView;
    }
    //END display_entry_cp
}
//END class E_signature_freeform_ft
