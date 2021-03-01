
  // Your web app's Firebase configuration
  var config = {
    apiKey: "AIzaSyCS1AbjulHwVQX0FXvwdN2hXeku1lJpRh0",
    authDomain: "survey-app-8f47c.firebaseapp.com",
    databaseURL: "https://survey-app-8f47c.firebaseio.com",
    projectId: "survey-app-8f47c",
    storageBucket: "survey-app-8f47c.appspot.com",
    messagingSenderId: "231817333443",
    appId: "1:231817333443:web:0a39c1702af1c74282f076",
    measurementId: "G-T4H5YPNKBM"
  };
  // Initialize Firebase
  firebase.initializeApp(config);
  
 // const dbRef = firebase.database().ref();
  const db = firebase.firestore();

//const usersRef = dbRef.child('users');
//const userListUI = document.getElementById("userList");
/*

function addUsersToFirestore() {
    var users = [{
            name: "Raja",
            email: "raja.tamil@email.com",
            createdAt: new Date("2019-01-01 12:08:00")
        },
        {
            name: "Arivu",
            email: "arivu.selvan@email.com",
            createdAt: new Date("2018-01-23 09:13:00")
        }, {
            name: "Mike",
            email: "mike.author@email.com",
            createdAt: new Date("2018-08-08 06:37:00")
        }, {
            name: "Praba",
            email: "praba.karan@email.com",
            createdAt: new Date("2018-10-09 18:26:00")
        },
        {
            name: "Muhammad",
            email: "muhammad.ali@email.com",
            createdAt: new Date("2018-03-13 12:13:00")
        }
    ];
    const db = firebase.firestore();
    users.forEach(user => {
        db.collection("users").doc().set(user);
    });
}*/

function getData()
{
	
	
	db.collection("answer")
	.get()
.then(snap => {
    snap.forEach(doc => {
		//count++;
		//var result = doc.data();
		console.log(doc.data());
        console.log(doc.data().email);
		console.log(doc.data()[0].answer);
	
    });
});
	
}

function getStat()
{
	//var table_data = document.getElementById("body_data");
	var email;
	
	db.collection("answer")
	.get()
.then(snap => {
    snap.forEach(doc => {
		//count++;
		//var result = doc.data();
		email = doc.data().email;
		console.log(doc.data());
        console.log(email);
		console.log(doc.data()[0].answer);
		
		
		var length = Object.keys(doc.data()[1].answer).length;
		var length2 = Object.keys(doc.data()[2].answer).length;
		var sum=0;
		var sum2=0;
		var i,j;
		//console.log("Answer 2:" + doc.data()[2].answer[i].item.id);
		for(i = 1; i <= length; i++ )
		{
			
			sum += doc.data()[1].answer[i].item.id;
			
			
		}
		//console.log(doc.data()[2].answer.item);
		for(j = 1; j <= length2; j++ )
		{
			
			sum2 += doc.data()[2].answer[j].item.id;
			//console.log(doc.data()[2].answer[i].item.id);
			
		}
		console.log("The sum:" + sum );
		var mean = (sum/length).toFixed(2);
		var mean2 = (sum2/length2).toFixed(2);
		var shop_id = doc.data()[0].answer;
		console.log("The mean score:" +  mean);
		 console.log(doc.data());
		 var total = sum + sum2;
		 var total_mean =  ((parseFloat(mean) + parseFloat(mean2))/2).toFixed(2);
		console.log(total_mean);
        console.log(doc.id);
		$("#body_data").append("<tr class='odd gradeX' >"+
											"<td><input type='checkbox' class='checkboxes' value='1' /></td>"+
											"<td>"+email+"</td>"+
											"<td>"+shop_id+"</td>"+
											"<td class='hidden-480' >"+sum+"</td>"+
											"<td class='hidden-480'>"+sum2+"</td>"+
											"<td class='center hidden-480'>"+mean+"</td>"+
											"<td class='center hidden-480'>"+mean2+"</td>"+
											"<td class='hidden-480'>"+total+"</td>"+
											"<td class='hidden-480'>"+total_mean+"</td>"+
										"</tr>");
    });
});
	
}

function getNumbers()
{
	
	var count =0;
	var feedbackUI = document.getElementById("feedbackNo");
	
	
	
		db.collection("answer")
	.get()
.then(snap => {
    
		feedbackUI.append(snap.size);
		//count = snap.size;
		//var result = doc.data();
		//console.log(doc.data());
        //console.log(doc.data().email);
		 //console.log(doc.data());
		//console.log(doc.id);
        //console.log(doc.id);
		
  
});


	
}

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("sample_1");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

//addUsersToFirestore();

getData();


/*usersRef.on("child_added", snap => {

	let user = snap.val();

	let $li = document.createElement("li");
	$li.innerHTML = user.name;
	$li.setAttribute("child-key", snap.key);
	$li.addEventListener("click", userClicked)
	userListUI.append($li);

});


function userClicked(e) {

	var userID = e.target.getAttribute("child-key");

	const userRef = dbRef.child('users/' + userID);
	const userDetailUI = document.getElementById("userDetail");

	userDetailUI.innerHTML = ""

	userRef.on("child_added", snap => {


		var $p = document.createElement("p");
		$p.innerHTML = snap.key  + " - " +  snap.val()
		userDetailUI.append($p);


	});

}*/

 
