<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Payroll</title>
    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'
      integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'
      integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'>
    </script>
    <style>
      .scroll-container {
        display: flex;
        position: relative;
        overflow-x: auto !important;
        overflow-y: auto !important;
        margin: 0;
        padding: 0;
        flex-flow: row nowrap !important;
      }

      .content {
        flex: 0 0 100vw;
        height: 100vh !important;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        text-align: center;
        font-size: 24px;
        position: relative;
        display: inline-block;
      }

      .sidebar {
        position: fixed;
        top: 0;
        height: 100vh;
        background-color: #343a40;
        color: #ffffff;
        padding: 20px;
        z-index: 1000;
      }

      .feature-list li {
        font-size: 18px;
      }

      .section-heading {
        background-color: #28a745;
        color: white;
        padding: 10px 0;
        border-radius: 5px;
      }

      .section-content {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      #pieChart {
        width: 400px !important;
        height: 400px !important;
      }
    </style>
    <link href='../dist/assets/style.css' rel='stylesheet' />
    <!-- <link href='../dist/assets/css/style.css' rel='stylesheet' /> -->
  </head>