<?php
    namespace App;
    class Cart{

        public $items = null;
        public $totalQty = 0;
        public $totalPrice = 0;


        public function __construct($oldCart){

            if($oldCart){
                $this->items = $oldCart->items;
                $this->totalQty = $oldCart->totalQty;
                $this->totalPrice = $oldCart->totalPrice;
            }

        }

        public function add($item, $id_produit){

            $storedItem = ['qty' => 0, 'id_produit' => 0, 'nom_produit' => $item->nom_produit,
        'prix_produit' => $item->prix_produit, 'image_produit' => $item->image_produit, 'item' =>$item];

        if($this->items){
            if(array_key_exists($id_produit, $this->items)){
                $storedItem = $this->items[$id_produit];
            }
        }

        $storedItem['qty']++;
        $storedItem['id_produit'] = $id_produit;
        $storedItem['nom_produit'] = $item->nom_produit;
        $storedItem['prix_produit'] = $item->prix_produit;
        $storedItem['image_produit'] = $item->image_produit;
        $this->totalQty++;
        $this->totalPrice += $item->prix_produit;
        $this->items[$id_produit] = $storedItem;

        }

        public function updateQty($id, $qty){
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['prix_produit'] * $this->items[$id]['qty'];
            $this->items[$id]['qty'] = $qty;
            $this->totalQty += $qty;
            $this->totalPrice += $this->items[$id]['prix_produit'] * $qty;

        }

        public function removeItem($id){
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['prix_produit'] * $this->items[$id]['qty'];
            unset($this->items[$id]);
        }
    }

?>