@if (auth()->user())


@if (auth()->user()->role == 'super-admin')
<script>

$(document).ready(function(){

    var div = $('#not');
    console.log(div.find('a:first'));


            // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    // pusher creditial
    var pusher = new Pusher('74b3e16fd1d7c4a266a3', {
        cluster: 'ap2',
        encrypted: true
    });

    // message chanel
    let channel = pusher.subscribe('site_approval');
    channel.bind('App\\Events\\SiteApprovalNotification', function(data) {

        if(data){

            console.log(data);
            siteNeedApproval(data);

        }

        function siteNeedApproval(data){

            let notifications_count_1 = parseInt($('.count_notification_number_1').text(), 10);
            notifications_count_1 = notifications_count_1 + 1;
            $('.count_notification_number_1').text(notifications_count_1);

            let notifications_count_2 = parseInt($('.count_notification_number_2').text(), 10);
            notifications_count_2 = notifications_count_2 + 1;
            $('.count_notification_number_2').text(notifications_count_2);


            var no_notification = document.getElementById('alert_not');
            no_notification.style.display = 'none';
            /* if(no_notification){
                // hide the no notification
                no_notification.style.display = 'none';
            } */

            notificationHTML = `
               <div class="dropdown-divider"></div>
               <a style="margin-left: 24px;padding-top: 20px;padding-bottom: 20px;border-top:#4B49AC solid 1px" href = "{{ route('all_disabled_publishers') }}">
                 <img style="width: 25px;height: 25px;border-radius: 100%" class = "ml-2" src = "${data.user_img}">
                 <span class="text-muted" style="font-size: 14px">Publisher: <span class="text-danger">   ${data.username}</span> Request Approval for website : <br>  <span style="margin-left: 20px" class="text-success">https://${data.site_url}</span></span>
                  <span style="font-size: 10px !important;" class="text-primary"> Check <span style="position: relative;float: inline-end;margin-top: 6px;">${data.time}</span></span>
               </a>
               <div class="dropdown-divider"></div>`;

               console.log(notificationHTML);

                // Get the container that holds the links
                var div = $('#not');

                //console.log(div[0]);
                // Insert the new link before the first link
                if (div.find('a:first').length) {
                    div.find('a:first').before(notificationHTML);
                } else {
                    div.append(notificationHTML);
                }

        }



    });


/*
    // task chanel
    let channel = pusher.subscribe('task_chanel');
    channel.bind('App\\Events\\TaskNotification', function(data) {
        console.log(data);

        // get the task notification from navbar
        let notifications_count_1 = parseInt($('.count_notification_number_1').text(), 10);
        notifications_count_1 = notifications_count_1 + 1;
        $('.count_notification_number_1').text(notifications_count_1);

        let notifications_count_2 = parseInt($('.count_notification_number_2').text(), 10);
        notifications_count_2 = notifications_count_2 + 1;
        $('.count_notification_number_2').text(notifications_count_2);

        // get the task notification from sidebar
        let task_sidebar_notification = parseInt($('.task_sidebar_notification').text(), 10);
        task_sidebar_notification = (task_sidebar_notification +1);
        $('.task_sidebar_notification').text(task_sidebar_notification);

        // render notiication
        addNotification(data, 'task');
         // render the task tr
         push_task_tr(data);

      });

      // payment chanel
      let payment_channel = pusher.subscribe('payement_chanel');
      payment_channel.bind('App\\Events\\PaymentNotification', function(data) {
         console.log(data);

        let notifications_count_1 = parseInt($('.count_notification_number_1').text(), 10);
        notifications_count_1 = notifications_count_1 + 1;
        $('.count_notification_number_1').text(notifications_count_1);

        let notifications_count_2 = parseInt($('.count_notification_number_2').text(), 10);
        notifications_count_2 = notifications_count_2 + 1;
        $('.count_notification_number_2').text(notifications_count_2);

        // render notiication
        addNotification(data, 'payment');


      });


      function addNotification(data, type) {
        var notificationsContainer = document.querySelector('#not');
        //var notificationsContainer = document.querySelector('#not')
        console.log(notificationsContainer);
        var notificationHTML = '';

        var no_notification = document.getElementById('alert_not');
        if(no_notification){
            // hide the no notification
            no_notification.style.display = 'none';
        }


        if (type === 'payment') {
            notificationHTML = `
             <div class="dropdown-divider"></div>
               <a style="margin-left: 24px;padding-top: 20px;padding-bottom: 20px;" href = "${data.url}">
                 <img style="width: 25px;height: 25px;border-radius: 100%" class = "ml-2" src = "${data.user_image}">
                 <span class="ml-3 text-muted" style="font-size: 9px"> ${data.username} Make Payment amount : $${data.amount} </span>
                 <span style="padding: 38px;font-size: 11px !important;" class="text-sm"> ${data.time}</span>
               </a>
               <div class="dropdown-divider"></div>`;

        } else if (type === 'task') {
            notificationHTML =  `
           <div class="dropdown-divider"></div>
                 <a style="padding-top: 20px;padding-bottom: 20px;" href="${data.site_url}">
                  <img style="width: 25px;height: 25px;border-radius: 100%" class = "ml-2" src = "${data.user_image}">
                  <span class="ml-3 text-muted" style="font-size: 14px"> ${data.username} Create New Task </span>
                  <span style="padding: 38px;font-size: 11px !important;" class="text-sm">${data.time}</span>
                 </a>
                 <div class="dropdown-divider"></div>`;
        }


            // Get the container that holds the links
             var div = $('#not');

             //console.log(div[0]);


            // Insert the new link before the first link
            if (div.find('a:first')) {
                div.find('a:first').before(notificationHTML);
            } else {
                $('#not').append(notificationHTML);
            }

        // Optionally, log the entire container to see the result
        //console.log(container.innerHTML);

        //document.querySelector('#not').innerHTML += notificationHTML; // Append new notification
      }

    // function for add real time task tr first
     function push_task_tr(data){

        // Get the table by ID or another selector
          var table = document.getElementById('table');
          var tbody = table.tBodies[0];

            // Create a new tr element
            var newRow = document.createElement('tr');
            // add class bg-warning
            newRow.classList.add('bg-warning');

            // Add cells and content to the newRow
            newRow.innerHTML = `
                <td><img style="width: 40px;border-radius: 100%" src="${data.user_image}"></td>
                <td>${data.username}</td>
                <td>${data.task_project_name}</td>
                <td><a href="${data.publisher_url}" target="_blink">${data.publisher_url}</a></td>
                <td>${data.time}</td>
                <td>${data.task_type}</td>
                <td>
                    <span class="badge badge-secondary p-2" title="Task Not Started">
                    NOT STARTED
                    </span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="${data.url}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-eye mr-2"></i>Open The Task
                        </a>
                    </div>
                </td>`;


                if (tbody.rows.length > 0) {
                    tbody.insertBefore(newRow, tbody.rows[0]);
                    //let result =  table.outerHTML;
                    //console.log(result);
                } else {
                    // If no rows are present, just append the new row
                    tbody.appendChild(newRow);
                }


                //table.innerHTML += table.outerHTML;




     } */

});


</script>
@endif

@endif
