<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>





<!DOCTYPE html>
<html>
<head>
	<title>User's Guide</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <header>

</header>

<style>
  
 
  html, body {
  height: 100%;
}


body {

  background-repeat: no-repeat;
}



  .container {
  width: auto;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
  padding: 20px;

}

.formx {
	width: auto;
	padding: 20px;
	border-radius: 30px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.box {
	width: 900px;
  
}
.container table {
	padding: 20px;
	border-radius: 10px;
	
  border:10px;
  background-color: white;
}
.border {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:10px;
  border-radius: 30px;
  background-color: white;

}


.link-right {
	display: flex;
	justify-content: flex-end;
}


.link-center {
	display: flex;
	justify-content: flex-end;
}






.thead
{
font-size: 10px;;

}

.img-fluid:hover {
  width: 40px; /* or any other desired size */
}
.modal
{
 border: 100px;
 background-color: ;
 
}





  .nav-item
  {
  
      color:black;
  
  }
  .subjectlist{
  
      margin-left: 5rem;
      margin-top: 5rem;
  }
  
  .studentlist{
  
  margin-left: 20rem;
  margin-top: 5rem;
  }
  
  
  .button{
  
      margin-left: 5rem;
      margin-top: 11rem;
  }
  
  
  .button1{
  
  margin-left: 5rem;
  margin-top: 9.5rem;
  }
  
  .title{
      margin-left: 40rem;
      margin-top: 1rem;
      font-size: 3.5rem;
  }
  .text1
  {
      margin-left: 23rem;
      margin-top: -20rem;
      width: 45rem;
      height: 10rem;
  }
  
  .text2
  {
      margin-left: 23rem;
      margin-top: -20rem;
      width: 45rem;
      height: 10rem;
  }




.top-container {
    background-color: #f1f1f1;
    padding: 30px;
    text-align: center;
  }
  
  .header {
   
    background-color: white;
    color: #f1f1f1;
  }
  
  .content {
    padding: 16px;
  }
  
  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }
  
  .sticky + .content {
    padding-top: 102px;
  }
  .btn-transparent {
    background-color: transparent;
    border: none;
  }

  .btn-transparent:hover {
    background-color: transparent;
    border: none;
  }

  .btn-transparent:focus {
    background-color: transparent;
    border: none;
    box-shadow: none;
  }

  .btn img {
    width: 30px;
    height: 30px;
  }


  #refresh-img {
  transition: all 0.2s;
}
.btn:hover img {
    transform: scale(1.2);
}
#refresh-img:hover {
  transform: scale(1.2);
}
.zoom:hover img {
  transform: scale(1.2);
}
#search {
  border-width: 2px;
}
.page-item a.page-link {
  opacity: 0.5;
}
.page-item.active a.page-link {
  font-weight: bold;
  opacity: 1;
}
td a {
  text-decoration: none;
  color: black;
}


td a:hover {
  font-weight: bold;
  color: black;
}

.table-scrollable{
  height: 350px;
  overflow-y: auto;
  scroll-behavior: smooth;
}
.table-scrollable::-webkit-scrollbar {
  width: 10px; /* width of the scrollbar */
}

.table-scrollable::-webkit-scrollbar-track {
  background: #f1f1f1; /* color of the track */
}

.table-scrollable::-webkit-scrollbar-thumb {
  background: #888; /* color of the thumb */
  border-radius: 5px; /* roundness of the thumb */
}

.table-scrollable::-webkit-scrollbar-thumb:hover {
  background: #555; /* color of the thumb on hover */
}

.fade-in {
  animation: fadeIn 0.5s ease-in-out;
}
.table-scrollable {
  overflow-y: scroll; /* Make the container scrollable */
}

.table-scrollable thead {
  position: sticky; /* Make the header sticky */
  top: 0; /* Position the header at the top */
  z-index: 1; /* Make the header stay on top of the rows */
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
a.btn:hover img {
    transform: scale(1.2);
}
#rolling-image {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  z-index: 9999; /* or any higher value than other elements on the page */
}
.about{

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 20px;
}
.about img {
  transition: transform .3s ease;
}

.about img:hover {
  transform: scale(1.1);
}

.text{

  font-size: 30px;
  font-family: tahoma;
  color: white;

}
html, body {
  height: 100%;
}



.image-container {
  overflow: hidden;
}

.about {
  transition: transform 0.3s ease-out;
}

.about:hover {
  transform: scale(1.1);
}

  </style>
</head>

<body>
<div class="container">
  <h2 class="mb-4">Introduction to System Administration</h2>
  <p>An admin, short for administrator, is a user with the highest level of access to the system. They have full control over the system and are responsible for managing its settings, features, and functions. In simpler terms, they are like the head honcho or the captain of the ship who has the power to steer the system in the right direction.</p>
  <p>However, it's important to note that while the registrar staff also has some access to the system, their level of access is limited compared to that of the admin. For instance, they can enroll students and manipulate some data, but they cannot make changes to the system's settings or functions.</p>
  <h3 class="mt-5">Why is the admin crucial to the system's success?</h3>
  <p>The admin plays a vital role in ensuring the system is operating smoothly and efficiently. They are responsible for keeping the system up-to-date, configuring its settings, and fixing any errors or issues that may arise.</p>
  <p>Additionally, the admin is the one who decides who else can access the system and what level of access they have. This helps ensure that the system remains secure and protected from unauthorized access.</p>
  <h4 class="mt-5">Conclusion</h4>
  <p>The admin is the backbone of the system. They are responsible for managing the system's settings and features, ensuring its smooth operation, and protecting it from unauthorized access. So, if you're looking to become an admin, you must possess the necessary skills and expertise to manage and operate the system successfully.</p>
</div>
<div class="container">
  <h2 class="mb-4">Navigation Menu</h2>
  <p>Once you have successfully logged in with your username and password, you will be directed to the index page. Here, you will find a header that contains a navigation menu. This menu includes various links to different sections of the system that are accessible by an admin.</p>
  <p>Let's take a closer look at each link in the navigation menu:</p>
  <ul>
    <li><a href="#">Home</a>: This link will take you back to the home page of the system.</li>
    <li><a href="#">Student List</a>: This link will allow you to view a list of all the students enrolled in the system.</li>
    <li><a href="#">Subject List</a>: This link will allow you to view a list of all the subjects available in the system.</li>
    <li><a href="#">Section List</a>: This link will allow you to view a list of all the sections available in the system.</li>
    <li><a href="#">Records</a>: This link will allow you to view the records of all the students enrolled in the system.</li>
    <li><a href="#">Reports</a>: This link will allow you to generate various reports based on the data stored in the system.</li>
    <li><a href="#">Users</a>: This link will allow you to manage the users who have access to the system.</li>
    <li><a href="#">Settings</a>: This link will allow you to configure the system's settings, such as the layout, language, and other preferences.</li>
    <li><a href="#">Logout</a>: This link will log you out of the system, ending your session.</li>
  </ul>
  <p>Overall, this header and navigation menu provide an easy-to-use interface for an admin to access and manage various aspects of the system. By clicking on the links in the menu, an admin can easily navigate through different sections of the system and perform the necessary actions to ensure its smooth operation.</p>
</div>
<div class="container">
  <h2>Student List Page</h2>
  <p>User manual for the Student List feature! This feature allows the admin to view and manage all the students enrolled in the system. Here's a step-by-step guide on how to use this feature:</p>
  
  <h3>Step 1: Access the Student List page</h3>
  <p>To access the Student List page, click on the "Student List" link in the navigation menu. This will direct you to a page where you can view a list of all the students enrolled in the system.</p>
  
  <h3>Step 2: View the student list</h3>
  <p>On the Student List page, you will see a table that contains the list of all the students. The table will include various details about each student, such as their name, student number, grade level, section, and academic year. Additionally, you will also see a column that indicates which track and strand the student is enrolled in.</p>
  
  <h3>Step 3: Filter the student list</h3>
  <p>To help you filter the results of students, there will be various buttons available on the page. These buttons will allow you to filter the results of students based on specific criteria. For example:</p>
  
  <ul>
    <li>Section Name: By clicking on this button, you can filter the results to show only the students enrolled in a specific section.</li>
    <li>Grade Level: By clicking on this button, you can filter the results to show only the students in a specific grade level.</li>
    <li>Academic Year: By clicking on this button, you can filter the results to show only the students enrolled in a specific academic year.</li>
    <li>Track and Strand: By clicking on this button, you can filter the results to show only the students enrolled in a specific track and strand.</li>
  </ul>
  
  <p>Overall, these filtering options make it easy for the admin to quickly find the information they need and manage the students enrolled in the system effectively. By using these filtering buttons, the admin can streamline the process of managing and organizing the student data in a more efficient and organized manner.</p>
  
  <h3>Step 4: Add a new student</h3>
  <p>In addition to the student list, you will also notice an icon or button on the page that represents adding a new student. This button is typically represented by a plus sign or an icon of a person with a plus sign.</p>
  
  <p>By clicking on this button, the admin will be directed to a page where they can add a new student to the system. This is typically done by filling out a form that asks for the student's personal information such as their name, address, contact details, and academic information such as their grade level, section, track and strand, and other relevant details.</p>
  
  <p>The process of adding or enrolling a new student into the system is straightforward and typically involves filling out the required fields in the form accurately. Once the admin has entered all the necessary information, they can then click the submit button to save the new student's information into the system.</p>
  
  <p>This feature allows the admin to easily manage student data and add new students to the system as needed. By providing a simple and intuitive interface for adding new students, the admin can save time and reduce the risk of errors when managing student data.
  </p>
      </div>
    </div>
  </div>
</div>
<div class="container my-5">
  <h2 class="text-center">Conclusion</h2>
  <p>
    In summary, the Student List page is a useful tool for admins to manage and organize student data in the system. By using the filtering options available on the page, the admin can quickly find the information they need and manage students effectively. Additionally, the option to add new students to the system provides a simple and efficient way to manage student data and reduce the risk of errors. We hope this user manual has been helpful in guiding you through the Student List page and its features.
  </p>
</div>






</body>
</html>
<?php

}


