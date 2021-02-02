
<?php  
//Represent a node of singly linked list  
class Node{  
    public $data;  
    public $next;  
      
    function __construct($data){  
        $this->data = $data;  
        $this->next = NULL;  
    }  
}  
class SinglyLinkedList{  
    //Represent the head and tail of the singly linked list  
    public $head;  
    public $tail;  
    function __construct(){  
        $this->head = NULL;  
        $this->tail = NULL;  
    }  
      
    //addNode() will add a new node to the list  
    function addNode($data) {  
        //Create a new node  
        $newNode = new Node($data);  
          
        //Checks if the list is empty  
        if($this->head == NULL) {  
            //If list is empty, both head and tail will point to new node  
            $this->head = $newNode;  
            $this->tail = $newNode;  
        }  
        else {  
            //newNode will be added after tail such that tail's next will point to newNode  
            $this->tail->next = $newNode;  
            //newNode will become new tail of the list  
            $this->tail = $newNode;  
        }  
    }  
      
    //display() will display all the nodes present in the list  
    function display() {  
        //Node current will point to head  
        $current = $this->head;  
          
        if($this->head == NULL) {  
            print("List is empty <br>");  
            return;  
        }  
        print("Nodes of singly linked list: <br>");  
        while($current != NULL) {  
            //Prints each node by incrementing pointer  
            print($current->data . " ");  
            $current = $current->next;  
        }  
        print("<br>");  
    }  
}  
      
$sList = new SinglyLinkedList();  
          
//Add nodes to the list  
$sList->addNode(1);  
$sList->addNode(2);  
$sList->addNode(3);  
$sList->addNode(4);  
   
//Displays the nodes present in the list  
$sList->display();  
?>