<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

/**
 *
 */
class TextInput extends Component
{
    /**
     * Placeholder for input
     *
     * @var string
     */
    public string $placeholder;


    /**
     * Name for input
     *
     * @var string
     */
    public string $name;


    /**
     * Type of input
     *
     * @var string
     */
    public string $type;


    /**
     * @var mixed
     */
    public mixed $value;

    /**
     * Create a new component instance.
     *
     * @param string $placeholder
     * @param string $name
     * @param string $type
     * @param mixed $value
     * @return void
     */
    public function __construct(string $placeholder, string $name, string $type, mixed $value = '')
    {
        $this->placeholder = $placeholder;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.text-input');
    }
}
