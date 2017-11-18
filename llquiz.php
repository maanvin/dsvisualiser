<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="q2.css">
		<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="menus.css">
		<style type="text/css">
			.card{border-radius: 20px;}
		</style>
		
	</head>
	<body>
		<form action="scorecheck.php">
		<div id="base" class="card" style="background: linear-gradient(orange, yellow)">
			<pre style="position: absolute;top: 40px;left: 250px">YOU'RE ALL DONE!</pre>
			<button type="submit" style="height:30px; width: 300px; position: absolute; top:50%;left:150px">Score My Test!</button>
		</div>
		<div id="card1" class="card">
			<div class="question">
				<pre>
	5. What is the output of following function for start pointing to 
	first node of following linked list? 1->2->3->4->5->6

	void fun(struct node* start)
	{
	  if(start == NULL)
	    return;
	  printf("%d  ", start->data); 
	  
	  if(start->next != NULL )
	    fun(start->next->next);
	  printf("%d  ", start->data);
	}
				</pre>
			</div>
			
			<table>
				<tr><td class="answer"><input type="radio" name="Q5" value="a">1 4 6 6 4 1</td></tr>
				<tr><td class="answer"><input type="radio" name="Q5" value="b">1 3 5 1 3 5</td></tr>
				<tr><td class="answer"><input type="radio" name="Q5" value="c">1 3 5 5 3 1</td></tr>
			</table><br>
			
		</div>
		<div id="card2" class="card">
			<div class="question">
				<pre>
	4. Each node of a doubly linked list takes up more memory 
	   than that of a singly linked list
				</pre>
			</div>
				
			<table>
				<tr><td class="answer"><input type="radio" name="Q4" value="a">True</td></tr>
				<tr><td class="answer"><input type="radio" name="Q4" value="b">False</td></tr>
	
			</table><br>
		</div>
		<div id="card3" class="card">
			<div class="question">
				<pre>
	3.What does the following fragment of code do with a linked list? 
		current = head; 
		while (current != null) 
		{ 
			current = current.link; 
		}
				</pre>
			</div>
			
			<table>
				<tr><td class="answer"><input type="radio" name="Q3" value="a">Traverses the list</td></tr>
				<tr><td class="answer"><input type="radio" name="Q3" value="b">Initialises the list</td></tr>
				<tr><td class="answer"><input type="radio" name="Q3" value="c">Counts the number of nodes</td></tr>
			</table><br>
			
		</div>
		<div id="card4" class="card">
		<div class="question">
			<pre>
	2. What is the output of following function for start pointing to fir
	st node of following linked list? 1->2->3->4->5->6

	void fun(struct node* start)
	{
	  if(start == NULL)
	    return;
	  printf("%d  ", start->data); 
	  
	  if(start->next != NULL )
	    fun(start->next->next);
	  printf("%d  ", start->data);
	}
			</pre>
		</div>
		
		<table>
			<tr><td class="answer"><input type="radio" name="Q2" value="a">1 4 6 6 4 1</td></tr>
			<tr><td class="answer"><input type="radio" name="Q2" value="b">1 3 5 1 3 5</td></tr>
			<tr><td class="answer"><input type="radio" name="Q2" value="c">1 3 5 5 3 1</td></tr>
		</table><br>
			
		</div>
		<div id="card5" class="card">
			<div class="question">
				<pre>
	1. What Does the Following Code Print?

	void fun1(struct node* head)
	{
			if(head == NULL)
					return;

			fun1(head->next);
			printf("%d  ", head->data);
	}
				</pre>
			</div>
			
			<table>
				<tr><td class="answer"><input type="radio" name="Q1" value="a">Prints all nodes of the linked list</td></tr>
				<tr><td class="answer"><input type="radio" name="Q1" value="b">Prints all nodes of the linked list in reverse order</td></tr>
				<tr><td class="answer"><input type="radio" name="Q1" value="c">Prints alternate nodes of the linked list</td></tr>
			</table><br>

		</div>
		<button type="button" id="next" style="position: absolute; left:400px;top:650px;">Next Question</button>
		</form>

		<script type="text/javascript">
			var obj={}
			obj.count=1;
			var x;

			obj.flip=function()
			{
				//alert(obj.count)
				switch(obj.count)
				{
					case 5:
						x=document.querySelector("#card1");
						break
					case 4:
						x=document.querySelector("#card2");
						break;
					case 3:
						x=document.querySelector("#card3");
						break;
					case 2:
						x=document.querySelector("#card4");
						break;
					case 1:
						x=document.querySelector("#card5");
						break;
				}
				x.classList.toggle("cardfade");
				//x.parentNode.removeChild(x);
				obj.count++;	

			}

			document.querySelector("#next").addEventListener("click",obj.flip,false)




		</script>
	</body>
	
</html>