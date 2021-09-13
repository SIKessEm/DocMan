<?php namespace SIKessEm\IO;

trait API_Trait {

  public function setInput(Input_Interface $input): Input_Interface {

    return $this->input = $input;
  }

  public function getInput(): Input_Interface {

    return $this->input;
  }

  public function setOutput(Output_Interface $output): Output_Interface {

    return $this->output = $output;
  }

  public function getOutput(): Output_Interface {

    return $this->output;
  }
}