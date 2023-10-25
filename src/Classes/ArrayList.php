<?php

namespace src\Classes;
/*
--------------------------------------------------------------------------------
---             Class created by dak0k "Adaibekov Darkhan"                   ---
--------------------------------------------------------------------------------
*/
/**
 * The <span style="color:green">ArrayList</span> class  is a custom class that emulates a basic list or array-like behavior. It allows you to add and remove items from a list. Here's what the class does:
 *<br><br>
 * Properties:
 *<br>
 * It has a private property $elements, which is an array. This property stores the list of items in your "ArrayList."
 * <br><br>
 * add Method:
 *<br>
 * The <span style="color:red">add</span> method takes an item as its parameter and adds that item to the end of the list. It uses the $elements property to store the items.
 * <br><br>
 * remove Method:
 *<br>
 * The <span style="color:red">remove</span> method takes an item as its parameter and removes the first occurrence of that item from the list.
 * It uses array_search to find the index of the item, and if found, it uses array_splice to remove it.
 *  <br><br>
 * Example:
 *  <br>
 * $newList = new \App\Classes\ArrayList();<br>
 * $newList->add(1); <br>
 * $newList->add(2);<br>
 * $newList->remove(1);
 */
class ArrayList
{
    /**
     * @var array
     */
    private array $elements = [];

    /**
     * @param $item
     * @return void
     */
    public function add($item): void
    {
        $this->elements[] = $item;
    }

    /**
     * @param $item
     * @return void
     */
    public function remove($item): void
    {
        $index = array_search($item, $this->elements);
        if ($index !== false) {
            array_splice($this->elements, $index, 1);
        }
    }
}
