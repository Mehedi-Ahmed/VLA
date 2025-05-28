<?php
trait FileHandler {
    private $file = __DIR__ . '/../../data/vehicles.json';

    protected function readData() {
        return json_decode(file_get_contents($this->file), true) ?? [];
    }

    protected function writeData($data) {
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }
}
