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
class DeleteMid{  
    //Represent the head and tail of the singly linked list  
    public $head;  
    public $tail;  
    function __construct(){  
        $this->head = NULL;  
        $this->tail = NULL;  
        $this->size = 0;  
    }  
      
    //addNode() will add a new node to the list  
    function addNode($data) {  
        //Create a new node  
        $newNode = new Node($data);  
          
        //Checks if the list is empty  
        if($this->head == null) {  
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
        //Size will count the number of nodes present in the list  
        $this->size++;  
    }  
      
    //deleteFromMid() will delete a node from the middle of the list  
    function deleteFromMid() {  
          
        //Checks if list is empty  
        if($this->head == null) {  
            print("List is empty <br>");  
            return;  
        }  
        else {  
            //Store the mid position of the list  
            $count = ($this->size % 2 == 0) ? ($this->size/2) : (($this->size+1)/2);  
              
            //Checks whether head is equal to tail or not, if yes then list has only one node.  
            if( $this->head != $this->tail ) {  
                //Initially, temp will point to head  
                $temp = $this->head;  
                $current = null;  
                  
                //Current will point to node previous to temp  
                //If temp is pointing to node 2 then current will point to node 1.  
                for($i = 0; $i < $count-1; $i++){  
                    $current = $temp;  
                    $temp = $temp->next;  
                }                  
                if($current != null) {  
                    //temp is the middle that needs to be removed.  
                    //So, current node will point to node next to temp by skipping temp.  
                    $current->next = $temp->next;  
                    //Delete temp  
                    $temp = null;  
                }  
                //If current points to null then, head and tail will point to node next to temp.  
                else {  
                    $this->head = $this->tail = $temp->next;  
                    //Delete temp  
                    $temp = null;  
                }      
            }  
            //If the list contains only one element   
            //then it will remove it and both head and tail will point to null  
            else {  
                $this->head = $this->tail = null;  
            }  
        }  
        $this->size--;  
    }  
      
    //display() will display all the nodes present in the list  
    function display() {  
        //Node current will point to head  
        $current = $this->head;  
          
        if($this->head == NULL) {  
            print("List is empty <br>");  
            return;  
        }  
        while($current != NULL) {  
            //Prints each node by incrementing pointer  
            print($current->data . " ");  
            $current = $current->next;  
        }  
        print("<br>");  
    }  
}  
   
$sList = new DeleteMid();  
          
//Adds data to the list  
$sList->addNode(1);  
$sList->addNode(2);  
$sList->addNode(3);  
$sList->addNode(4);  
   
//Printing original list  
print("Original List: <br>");  
$sList->display();  
   
while($sList->head != null) {  
    $sList->deleteFromMid();  
    //Printing updated list  
    print("Updated List: <br>");  
    $sList->display();  
}  
?>  
