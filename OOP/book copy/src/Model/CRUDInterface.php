<?php

namespace Model;

interface CRUDInterface
{
    /**
     * read 
     */
    public function get(): array;

    /**
     * create
     */
    public function add(array $data): int;

    /**
     * update
     */
    public function edit(int $id, array $data);

    /**
     * Delete
     */
    public function del(int $id);
}
