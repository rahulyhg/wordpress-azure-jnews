<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Block;

Class Block_32_Option extends BlockOptionAbstract
{
    protected $default_number_post = 6;
    protected $show_excerpt = true;
    protected $default_ajax_post = 3;

    public function get_module_name()
    {
        return esc_html__('JNews - Module 32', 'jnews');
    }

    public function additional_style()
    {
        parent::additional_style();

        $this->options[] = array(
            'type'          => 'colorpicker',
            'param_name'    => 'readmore_background',
            'group'         => esc_html__('Design', 'jnews'),
            'heading'       => esc_html__('Readmore Button Background', 'jnews'),
            'description'   => esc_html__('Change the readmore button background color', 'jnews'),
        );

        $this->options[] = array(
            'type'          => 'colorpicker',
            'param_name'    => 'block_background',
            'group'         => esc_html__('Design', 'jnews'),
            'heading'       => esc_html__('Block Background', 'jnews'),
            'description'   => esc_html__('This option will change your Block Background', 'jnews'),
        );

        $this->options[] = array(
            'type'          => 'checkbox',
            'param_name'    => 'box_shadow',
            'group'         => esc_html__('Design', 'jnews'),
            'heading'       => esc_html__('Box Shadow', 'jnews'),
            'std'           => false
        );
    }
}