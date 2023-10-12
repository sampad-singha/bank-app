<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        @include('links.link')
    </head>
    <body class="d-flex flex-column">
            <!-- Navigation-->
            @include('layouts.navbar')
            <!-- Page content-->
            <section class="py-5 " >
                <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class=" u-text  u-text-1 animated customAnimationIn-played">Forms</h2>
        <p class="u-align-center u-text u-text-2 animated customAnimationIn-played">Note: In some cases, you may need to go to nearest brach in order to complete your application</p>
        <div class="u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="18.2%">
              <col width="42.3%">
              <col width="19.5%">
              <col width="20%">
            </colgroup>
            <tbody class="u-align-center u-table-body">
              <tr class="u-thead" style="height: 55px;">
                <td class="u-align-center u-first-column u-palette-1-base u-table-cell u-table-cell-1">No</td>
                <td class="u-palette-1-base u-table-cell u-table-cell-2"> Form Type </td>
                <td class="u-palette-1-base u-table-cell u-table-cell-5">Date Modified</td>
                <td class="u-palette-1-base u-table-cell u-table-cell-5"></td>
              </tr>
              <tr style="height: 83px;">
                <td class="u-align-center u-first-column u-table-cell u-table-cell-6"> 01</td>
                <td class="u-table-cell">Personal Account Opening Form</td>
                <td class="u-table-cell">03 Nov, 2022</td>
                <td class="u-table-cell">
                  <a class=" u-border-1 u-border-grey-60 u-border-hover-grey-60 u-btn u-button-style u-hover-grey-60 u-white u-btn-2" href="{{route('p-account')}}">Fill Form</a>
                </td>
              </tr>
              <tr style="height: 83px;">
                <td class="u-align-center u-first-column u-table-cell u-table-cell-6"> 02</td>
                <td class="u-table-cell">Organization Account Opening Form</td>
                <td class="u-table-cell">03 Nov, 2022</td>
                <td class="u-table-cell">
                  <a class=" u-border-1 u-border-grey-60 u-border-hover-grey-60 u-btn u-button-style u-hover-grey-60 u-white u-btn-2" href="" target="_blank">Fill Form</a>
                </td>
              </tr>
              <tr style="height: 83px;">
                <td class="u-align-center u-first-column u-table-cell u-table-cell-6"> 03</td>
                <td class="u-table-cell">Invoice (Mushak)</td>
                <td class="u-table-cell">03 Nov, 2022</td>
                <td class="u-table-cell">
                  <a class=" u-border-1 u-border-grey-60 u-border-hover-grey-60 u-btn u-button-style u-hover-grey-60 u-white u-btn-2" href="" target="_blank">Fill Form</a>
                </td>
              </tr>
              <tr style="height: 83px;">
                <td class="u-align-center u-first-column u-table-cell u-table-cell-6"> 04</td>
                <td class="u-table-cell">Request For Debit Card</td>
                <td class="u-table-cell">03 Nov, 2022</td>
                <td class="u-table-cell">
                  <a class=" u-border-1 u-border-grey-60 u-border-hover-grey-60 u-btn u-button-style u-hover-grey-60 u-white u-btn-2" href="" target="_blank">Fill Form</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
        </section>
        <!-- Footer-->
        @include('layouts.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        @include('links.script')
    </body>
</html>
