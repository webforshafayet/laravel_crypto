 <!--Bootstrap js-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="admin/js/vendor/modernizr-3.11.2.min.js"></script>

<!--ddtf js-->
<script src="admin/js/vendor//ddtf.js"></script>

<!--apexcharts js-->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script src="admin/js/customSelect.js"></script>

<script src="admin/js/dashboard.js"></script>

<script>
    $(document).ready(function(){
      $('table').ddTableFilter();
    });

    var options = {
      series: [{
          name: 'analytics',
          data: [1100, 2300, 800, 3700]
      }],

      chart: {
          type: 'area',
          foreColor: '#9a9797',
          height: 300,
          toolbar: {
              show: false
          },
          zoom: {
              enabled: false
          }
      },

      markers: {
          size: 0,
          colors: ["#f3ab02"],
          strokeColors: "#fff",
          strokeWidth: 2,
          hover: {
              size: 6,
          }
      },

      dataLabels: {
          enabled: false
      },

      stroke: {
          show: true,
          width: 2,
          curve: 'smooth'
      },

      fill: {
          type: 'solid'
      },
      colors: ["#f3ab02"],

      xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May'],
          axisTicks: {
              show: false
          },
      },

      yaxis: {
          labels: {
              formatter: value => value>0 ? value : '0000'
          },
      },
  };

  var chart = new ApexCharts(document.querySelector(".analyticsGraph"), options);
  chart.render();

</script>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="admin/js/vendor/modernizr-3.11.2.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script src="admin/js/customSelect.js"></script>

<script src="admin/js/dashboard.js"></script>

<script src="admin/js/loadData.js"></script>
<script src="admin/js/dataObjects/depositMngmtData.js"></script>
<script src="admin/js/managementTimeFilter.js"></script>
<script src="admin/js/editPopup.js"></script>
<script src="admin/js/selectFilter.js"></script>
<script>
    const dataHead=`
        <li class='d-flex p-3 pe-5 bg-transparent dhTitle logTitle text-uppercase singleUm'>
            <span class="d-inline-block">Client Id</span>
            <span class="d-inline-block">Date</span>
            <span class="d-inline-block">Depositor</span>
            <span class="d-inline-block">Email Address</span>
            <span class="d-inline-block">Wallet Address</span>
            <span class="d-inline-block">Attached File</span>
            <span class="d-inline-block text-end">Amount</span>
        </li>
    `;        

    let months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    const rowCallback = (row, li, dataContainer) => {
        let date = new Date(row['date']);
        let day = date.getDate();
        day = day>9 ? day : '0'+day;
        let month = months[date.getMonth()];
        let year = date.getFullYear();

        const id = row['id'];
        const optDot = 'optDot' + id;
        const optId = 'opt' + id;
        const viewBtnId = 'view'+id;
        const name = row['depositor'];
        const email = row['email'];
        const walAdd = row['wallet'];
        const amount = row['amount'];
        date = day + ' ' + month + ' ' + year;

        li.innerHTML = `
        <span class="id">${row['id']}</span>
        <span>${date}</span>
        <span>${name}</span>
        <span>${email}</span>
        <span>${walAdd}</span>
        <span class="paymentFile"><a href="${row['attachedFile']}">Payment File</a></span>
        <span class="text-end">\$${amount}</span>
        <button id="${optDot}" class="position-absolute bg-transparent border-0 opts">
            <img src="admin/img/vertical_dots.png">
        </button>

        <div id="${optId}" class="d-none position-absolute options">
            <button 
                id="${viewBtnId}"
                type="button" 
                data-bs-toggle="modal" 
                data-bs-target="#depositModal" 
                class="d-block view"
            >View Detais</button>
        </div>
        `;

        dataContainer.appendChild(li);

        const dot = selector('#'+optDot);
        const opt = selector('#'+optId);

        dot.addEventListener('click', ()=>opt.classList.toggle('d-none'));
        dot.addEventListener('blur', ()=>setTimeout(()=>opt.classList.add('d-none'), 100));

        selector('#'+viewBtnId).addEventListener('click', ()=>{
            selector('.uId').textContent = id;
            selector('.name').textContent = name;
            selector('.email').textContent = email;
            selector('.date').value = date;
            selector('.wallAdd').value = walAdd;
            selector('.amount').value = amount;
            viewInit();
        });
    }

    dataLoader(data, '.transHisTable', '.pagination', 0, rowCallback, dataHead);

    //Used in date range
    let filteredData = null;
    let asc = null;
    let desc = null;

    selectFilter('locationFilter');

    var dateStart = 0;
    var dateEnd = 0;
    mngmtTimeFilter('startDate', data, rowCallback, dataHead);
    mngmtTimeFilter('endDate', data, rowCallback, dataHead);


</script>