<?php
    namespace Jaco\Datastructures;

    class Queue {
        private $_data = [];
        private $_count = 0;

        public function enqueue($val) {
            $this->_data[$this->_count++] = $val;
        }

        public function dequeue() {
            $ret = null;
            if (!$this->_count)
                return null;

            $ret = $this->_data[0];

            for ($i = 1; $i < $this->_count; $i++)
                $this->_data[$i - 1] = $this->_data[$i];

            $this->_count--;

            return $ret;

        }

        public function isEmpty() {
            return $this->_count == 0;
        }

        public function front() {
            return $this->_count
                ? $this->_data[0]
                : null;
        }

        public function back() {
            return $this->_count
                ? $this->_data[$this->_count - 1]
                : null;
        }

        #[\Override]
        public function __toString(): string {
            if (!$this->_count)
                return "empty";

            $front = $this->front();
            $back = $this->back();

            return "$front $back";
        }
    }