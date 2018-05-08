$(document).ready(function(){
    window.prettyPrint && prettyPrint();
});

function personalSummary(event) {
  ploading.style.display = "block";
  var form_data = {
    'personal_summary': personal_summary.value,
    'twitter' : twitter.value,
    'linkedin' : mylinkedin.value
  };

  $.ajax({
    type: "post",
    url: "updatePersonalSummary",
    data: form_data,
    success: function(response) {
      personal_summary.value = " ";
      twitter.value = " ";
      mylinkedin.value = " ";
      console.log("RESPONSE IS ",response);
      if(response===false) {

        setInterval(function () {ploading.innerHTML =  "<div class='alert alert-success'>Form has been submitted earlier</div>"}, 1000);
      }else if(response==1) {
        setInterval(function () {ploading.innerHTML =  "<div class='alert alert-success'>Form successfully submitted</div>"}, 3000);
      }
    }
  });
  event.preventDefault();
}

function addSecondarySchool(event) {
  event.preventDefault();
  form_data = {
    'schoolName': s_name.value,
    'degree' : s_degree.value,
    'field': s_field.value,
    'from': s_from.value,
    'to': s_to.value,
    'award': s_award.value,
    'activity': s_activities.value,
    'type': "s",
    'mentor': s_mentor.value
  }

  loadEdu.style.display="block";

  $.ajax({
    type : "post",
    url : "updateEducation",
    data: form_data,
    success: function(response) {
      if(response = 'true') {
      setInterval(function() {loadEdu.innerHTML = "<div class='alert alert-success'>Form successfully submitted</div>"}, 3000);
      s_name.value = '';
      s_degree.value = '';
      s_field.value = '';
      s_from.value = '';
      s_to.value =  '';
      s_award.value = '';
      s_activities.value = '';
      } else {
        loadEdu.innerHTML = "Error while submiting form"
      }
    }
  });
}

function addUni(event) {
  event.preventDefault();
  form_data = {
    'schoolName': t_name.value,
    'degree' : t_degree.value,
    'field': t_field.value,
    'from': t_from.value,
    'to': t_to.value,
    'award': t_award.value,
    'activity': t_activities.value,
    'type': "t",
    'mentor': t_mentor.value
  }

  loadTer.style.display="block";

  $.ajax({
    type : "post",
    url : "updateEducation",
    data: form_data,
    success: function(response) {
      if(response = 'true') {
      setInterval(function() {loadTer.innerHTML = "<div class='alert alert-success'>Form successfully submitted</div>"}, 3000);
      t_name.value = '';
      t_degree.value = '';
      t_field.value = '';
      t_from.value = '';
      t_to.value =  '';
      t_award.value = '';
      t_activities.value = '';
      ter_submit.disabled=true
      } else {
        loadTer.innerHTML = "Error while submiting form"
      }
    }
  });
}

function addMaster(event) {
  event.preventDefault();
  form_data = {
    'schoolName': m_name.value,
    'degree' : m_degree.value,
    'field': m_field.value,
    'from': m_from.value,
    'to': m_to.value,
    'award': m_award.value,
    'activity': m_activities.value,
    'type': "m",
    'mentor': m_mentor.value
  }

  loadMas.style.display="block";

  $.ajax({
    type : "post",
    url : "updateEducation",
    data: form_data,
    success: function(response) {
      if(response = 'true') {
      setInterval(function() {loadMas.innerHTML = "<div class='alert alert-success'>Form successfully submitted</div>"}, 3000);
      m_name.value = '';
      m_degree.value = '';
      m_field.value = '';
      m_from.value = '';
      m_to.value =  '';
      m_award.value = '';
      m_activities.value = '';
      } else {
        loadMas.innerHTML = "Error while submiting form"
      }
    }
  });
}

function addDegree(event) {
  event.preventDefault();
  form_data = {
    'schoolName': d_name.value,
    'degree' : d_degree.value,
    'field': d_field.value,
    'from': d_from.value,
    'to': d_to.value,
    'award': d_award.value,
    'activity': d_activities.value,
    'type': "d",
    'mentor': d_mentor.value
  }

  loadDeg.style.display="block";

  $.ajax({
    type : "post",
    url : "updateEducation",
    data: form_data,
    success: function(response) {
      if(response = 'true') {
      setInterval(function() {loadDeg.innerHTML = "<div class='alert alert-success'>Form successfully submitted</div>"}, 3000);
      d_name.value = '';
      d_degree.value = '';
      d_field.value = '';
      d_from.value = '';
      d_to.value =  '';
      d_award.value = '';
      d_activities.value = '';

      degree_submit.disabled=true
      } else {
        loadDeg.innerHTML = "Error while submiting form"
      }
    }
  });
}


function addRecentExperience(event) {
  loadExp.style.display="block";
  form_data = {
    'title': title.value,
    'company': company.value,
    'location': state.value,
    'e_from': e_from.value,
    'e_to': e_to.value,
    'type': "r"
  }
  console.log(form_data);

  $.ajax({
    type: "post",
    url: "addExperience",
    data: form_data,
    success: function(response) {
      console.log(response);
      if(response == 'true') {
        setInterval(function() {loadExp.innerHTML = "<div class='alert alert-success'>Form successfully submitted</div>"}, 3000);
        title.value=" ";
        company.value=" ";
        location.value=" ";
        e_from.value=" ";
        e_to.value=" ";
      value=" "
    } else if (response == 'completed') {
        alert("You can only add up to 5 Work Experience");
      }else {
        loadExp.innerHTML = "Error while submiting form"
      }
    }
  });
  event.preventDefault();
}

function addPreviousExperience(event) {
  loadPrev.style.display="block";
  form_data = {
    'title': p_title.value,
    'company': p_company.value,
    'location': p_state.value,
    'e_from': p_from.value,
    'e_to': p_to.value,
    'type': "p"
  }
  console.log(form_data);

  $.ajax({
    type: "post",
    url: "addExperience",
    data: form_data,
    success: function(response) {
      console.log(response);
      if(response == 'true') {
        setInterval(function() {loadPrev.innerHTML = "<div class='alert alert-success'>Form successfully submitted</div>"}, 3000);
        p_title.value=" ";
        p_company.value=" ";
        p_location.value=" ";
        e_from.value=" ";
        e_to.value=" ";

      } else if (response == 'completed') {
        alert("You can only add up to 5 Work Experience");
      }else {
        loadPrev.innerHTML = "Error while submiting form"
      }
    }
  });
  event.preventDefault();
}


function submitCertificate(event) {
  //loadCert.style.display="none";
  loadCert.style.display="block";
  form_data = {
    'name': cname.value,
    'authority': cauthority.value,

  }
  console.log(form_data);

  $.ajax({
    type: "post",
    url: "addCertificate",
    data: form_data,
    success: function(response) {
      if(response == 'true') {
        setInterval(function() {loadCert.innerHTML = "<div class='alert alert-success text-center'>Form Submitted</div>"}, 3000);
       loadCert.innerHTML = " <div class='alert alert-success text-center'>Saving and updating your form......</div>";
       cname.value="";
       cauthority.value="";
      } else if (response == 'completed') {
        alert("You can only add up to 5 Certificates");
      }else {
        loadCert.innerHTML = "Error while submiting form"
      }
    }
  });
  event.preventDefault();
}

function submitMembership(event) {
  loadMem.style.display="block";
  form_data = {
    'name': orgName1.value,
    'level': level1.value,
    'url': url1.value

  }
  console.log(form_data);

  $.ajax({
    type: "post",
    url: "addMembership",
    data: form_data,
    success: function(response) {
      if(response == 'true') {
        setInterval(function() {loadMem.innerHTML = "<div class='alert alert-success text-center'>Form Submitted</div>"}, 3000);
       loadCert.innerHTML = " <div class='alert alert-success text-center'>Saving and updating your form......</div>";
       orgName1.value="";
       level1.value="";
       url1.value="";

       } else if (response == 'completed') {
        alert("You can only add up to 5 Membership Certificates");
      }else {
        loadMem.innerHTML = "Error while submiting form"
      }
    }
  });
  event.preventDefault();
}

function clearSuccessMessages() {
  loadCertificate.style.display="none";
}

function confirmation(event, id, sess, type) {
  event.preventDefault();
console.log("hello", type);
  if(sess == 1) {

      form_data = {
        'id': id,
        'type':type
      }
      $.ajax({
        type: "post",
        url: "mentors/addMentors",
        data: form_data,
        success: function(response) {
          if(response == 'true') {
            alert("Mentor Added to your list");
            var addButton = document.getElementById('formButton');
            addButton.innerHTML="<input type='button' value='My Mentor' class='add_mentor' disable='disabled/>"
            location.reload();
          } else if(response == 'false'){
            console.log("false all d way")
            alert(" Error!!! You can only add upto 5 mentors");
          } else {
              alert("Error while adding your mentor. Please try again");
          }
        }
      });

    } else {
      alert("Please Login to add a mentor")
    }
}

//Subscribers Posts

function phoneList() {
  if(pNum !='') {
    data = {
      pnum: pNum
    }
    $.ajax({
      type: "post",
      url: "home/phonesubscriber",
      data: data,
      success: function(response) {
        var successAlert = document.getElementById("success-alert");
        successAlert.style.display ="block";
        successAlert.innerHTML = "Your phone number has been successfully added to our subscriber's list";
        console.log(response);
      }
    });
  }
}

function mailList() {
  var listEmail = document.getElementById("p-email").value;
  if(listEmail != '') {
    data = {
      email: listEmail
    }
    $.ajax({
      type: "post",
      url: "home/emailsubscriber",
      data: data,
      success: function(response) {
        var successAlert = document.getElementById("success-alert");
        successAlert.style.display ="block";
        successAlert.innerHTML = "Your Email has been successfully added to our subscriber's list";
        console.log(response);
      }
    });
  }

}

//get messages in Messaging
function getMessages(id) {
  userid_data = {
    id: id
  }
  $.ajax({
    type: "post",
    url: "messaging/getMessages",
    data: userid_data,
    success: function(response) {
      messages.innerHTML = response;
      console.log(response);
    }
  });
}

function messageSent(event, id) {
  event.preventDefault();
  msg_sent.style="display:block";
  var theContent = "<div class='col-md-12 col-lg-12'>"+
    "<p class='ms_mydate mb_mydate'>"+moment().format('LLS')+"</p>"+
  "</div>"+

  "<div class='col-md-12 col-lg-12'>" +
    "<p class='ms_me mb_me'>"+message.value+"</p>"+
  "</div>";
  msg_data = {
    chat: message.value,
    id: id,
    time: moment().format('LL')
  }
  $.ajax({
    type: "post",
    url: "messaging/postData",
    data: msg_data,
    success: function(response) {
      if(response==1) {
        $('#msg_sent').append(theContent);
        message.value = '';
      }
    }
  });
}

function openTech(evt, techName) {
  var i, tabcontent_edu, tablinks;
  tabcontent_edu = document.getElementsByClassName("tabcontent_edu");
  for (i = 0; i < tabcontent_edu.length; i++) {
      tabcontent_edu[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(techName).style.display = "block";
  evt.currentTarget.className += " active";
}

function openSum(evt, sumName) {
    var i, tabcontent_edu, tablinks;
    tabcontent_edu = document.getElementsByClassName("tabcontent_edu");
    for (i = 0; i < tabcontent_edu.length; i++) {
        tabcontent_edu[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(sumName).style.display = "block";
    evt.currentTarget.className += " active";
}

function openEdu(evt, eduName) {
    var i, tabcontent_edu, tablinks;
    tabcontent_edu = document.getElementsByClassName("tabcontent_edu");
    for (i = 0; i < tabcontent_edu.length; i++) {
        tabcontent_edu[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(eduName).style.display = "block";
    evt.currentTarget.className += " active";
}

function openExp(evt, expName) {
    var i, tabcontent_edu, tablinks;
    tabcontent_edu = document.getElementsByClassName("tabcontent_edu");
    for (i = 0; i < tabcontent_edu.length; i++) {
        tabcontent_edu[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(expName).style.display = "block";
    evt.currentTarget.className += " active";
}

function openCert(evt, certName) {
    var i, tabcontent_edu, tablinks;
    tabcontent_edu = document.getElementsByClassName("tabcontent_edu");
    for (i = 0; i < tabcontent_edu.length; i++) {
        tabcontent_edu[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(certName).style.display = "block";
    evt.currentTarget.className += " active";
}

function openOrg(evt, orgName) {
  var i, tabcontent_edu, tablinks;
  tabcontent_edu = document.getElementsByClassName("tabcontent_edu");
  for (i = 0; i < tabcontent_edu.length; i++) {
      tabcontent_edu[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(orgName).style.display = "block";
  evt.currentTarget.className += " active";
}
function openSkill(evt, skillName) {
    var i, tabcontent_edu, tablinks;
    tabcontent_edu = document.getElementsByClassName("tabcontent_edu");
    for (i = 0; i < tabcontent_edu.length; i++) {
        tabcontent_edu[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(skillName).style.display = "block";
    evt.currentTarget.className += " active";
}

function openExpert(evt, expertName) {
    var i, tabcontent_edu, tablinks;
    tabcontent_edu = document.getElementsByClassName("tabcontent_edu");
    for (i = 0; i < tabcontent_edu.length; i++) {
        tabcontent_edu[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(expertName).style.display = "block";
    evt.currentTarget.className += " active";
}

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

$(window).on('load', function () {
   $('.ma5slider').ma5slider();
});

var add;
function clickText(obj) {
  // n mww = obj.html();
  if(obj!="All"){

    var searchs = $('#mainadd').html(obj);
  }
var oh =  $('obj').addClass('onhover');
$.ajax({
  type: "post",
  url: "career_guide/filter/"+obj,
  data: obj,
  success: function (response) {

      console.log(response);
      //console.log('it is true',response);
        $('#result').html(response);

   }
 });
}
//Side bar nav
$('#A').hover(
function(){ $(this).addClass('li') },
//function(){ $(this).removeClass('hover') }
)

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

//get getMyMentors
function getMentors(id) {
  userid_data = {
    id: id
  }
  bmentor.style.background="#555";
  bmentor.style.color="#fff";
  bmentee.style.background="#fff";
  bmentee.style.color="#555";
    $.ajax({
    type: "post",
    url: "getMentors",
    data: userid_data,
    success: function(response) {
      filterTab.innerHTML = response;
      console.log(response);
    }
  });
}

//get getMyMentees
function getMentees(id) {
  userid_data = {
    id: id
  }
  bmentee.style.background="#555";
  bmentee.style.color="#fff";
  bmentor.style.background="#fff";
  bmentor.style.color="#555";
  $.ajax({
    type: "post",
    url: "getMentees",
    data: userid_data,
    success: function(response) {
      filterTab.innerHTML = response;
      console.log(response);
    }
  });
}

var auto_refreshs = setIntervals(
function ()
{
  $('#notify').load('notification');
  notify.style.background = "none";
  notify.style.fontSize = "0px";
if(document.getElementById('notify').textContent == 0) {
  console.log(1);
} else  {
  notify.style.background = "red";
  notify.style.fontSize = "12px";
  notify.style.padding= "5px";
  notify.style.borderRadius = "5px;";
  $('#notify').load('notification');
}
},5000); // refresh every 10000 milliseconds

//Mentor Auto search

function search(event) {
  var search = document.getElementById('search').value;
  $.ajax({
    type: "post",
    url: "mentors/searchmentors/"+search,
    data: search,
    success: function (response) {

        console.log("response",response);
        //console.log('it is true',response);
          $('#result').html(response);

     }
   });
}

function ajaxSearch() {
  var input_data = $('#s_name').val();
console.log(input_data);
  if (input_data.length === 0) {
      $('#Secondary').hide();
  }
  else {
    var post_data = {
        'search': input_data,
        };

    $.ajax({
        type: "POST",
        url: "secSearch",
        data: post_data,
        success: function (data) {
            // return success
            if (data.length > 0) {
                $('#Secondary').show();
                //$('#suggestions').addClass('suggestion');
                $('#secondary').html(data);
            }
        }
     });
   }
 }

 function uniSearch() {
   var input_data = $('#t_name').val();
 console.log(input_data);
   if (input_data.length === 0) {
       $('#suggestions').hide();
   }
   else {
     var post_data = {
         'search': input_data,
         };

     $.ajax({
         type: "POST",
         url: "uniSearch",
         data: post_data,
         success: function (data) {
             // return success
             if (data.length > 0) {
                 $('#suggestions').show();
                 //$('#suggestions').addClass('suggestion');
                 $('#suggestions').html(data);
             }
         }
      });
    }
  }


 function add2field(obj) {
  $('#t_name').val(obj);
 }

 function add2sec(obj) {
  $('#s_name').val(obj);
  document.getElementById('sec').innerHTML = '';
 }
