@extends('layouts.portal')

@section('content')

<div class="page-wrapper">


<!-- Page Content-->
<div class="page-content-tab">

    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Unikit</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item"><a href="#">Project</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-md-6 col-lg-3 order-lg-1 order-md-1">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Projects</p>
                                <h4 class="font-22 fw-bold">77</h4>
                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i></span>26 Project Complete</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers align-self-center text-muted icon-sm"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>  
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body--> 
                </div><!--end card--> 
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">                                                
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Tasks</p>
                                <h4 class="font-22 fw-bold">41</h4>
                                <p class="mb-0 text-truncate text-muted"><span class="badge badge-soft-success">Active</span> Week Avg.Sessions</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square align-self-center text-muted icon-sm"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
                                </div>
                            </div> 
                        </div>
                    </div><!--end card-body--> 
                </div><!--end card--> 
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">                                                
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Budget</p>
                                <h4 class="font-22 fw-bold">$24100</h4>   
                                <p class="mb-0 text-truncate text-muted"><span class="text-dark">$14k</span> Total used budgets</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-self-center text-muted icon-sm"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>  
                                </div>
                            </div> 
                        </div>
                    </div><!--end card-body--> 
                </div><!--end card-->
            </div> <!--end col--> 
            <div class="col-lg-6 order-lg-2 order-md-3">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Overview</h4>                      
                            </div><!--end col-->
                            <div class="col-auto"> 
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal text-muted"></i> 
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Purchases</a>
                                        <a class="dropdown-item" href="#">Emails</a>
                                    </div>
                                </div>       
                            </div><!--end col-->
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="text-center">
                            <div class="chart-container">
                                <canvas id="bar" height="580" width="692" style="display: block; box-sizing: border-box; height: 290px; width: 346px;"></canvas> 
                            </div>
                        </div>                                     
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col--> 
            <div class="col-lg-3 col-md-6 order-lg-3 order-md-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Tasks Performance</h4>                      
                            </div><!--end col-->
                            <div class="col-auto"> 
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal text-muted"></i> 
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Purchases</a>
                                        <a class="dropdown-item" href="#">Emails</a>
                                    </div>
                                </div>       
                            </div><!--end col-->
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="text-center">
                            <div id="task_status" class="apex-charts" style="min-height: 231.65px;"><div id="apexchartsnggkfjfn" class="apexcharts-canvas apexchartsnggkfjfn apexcharts-theme-light" style="width: 346px; height: 231.65px;"><svg id="SvgjsSvg1102" width="346" height="231.65" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="346" height="231.65"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-left" xmlns="http://www.w3.org/1999/xhtml" style="position: absolute; left: 30px; top: 20px;"><div class="apexcharts-legend-series" rel="1" seriesname="Completed" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(42, 118, 244) !important; color: rgb(42, 118, 244); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Completed" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Completed</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Active" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgba(42, 118, 244, 0.5) !important; color: rgba(42, 118, 244, 0.5); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Active" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Active</span></div><div class="apexcharts-legend-series" rel="3" seriesname="Assigned" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgba(42, 118, 244, 0.18) !important; color: rgba(42, 118, 244, 0.18); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Assigned" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Assigned</span></div></div>
                                <style type="text/css">	

                                    .apexcharts-legend {	
                                        display: flex;	
                                        overflow: auto;	
                                        padding: 0 10px;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
                                        flex-wrap: wrap	
                                    }	
                                    .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                        flex-direction: column;	
                                        bottom: 0;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                                        justify-content: flex-start;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
                                        justify-content: center;  	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
                                        justify-content: flex-end;	
                                    }	
                                    .apexcharts-legend-series {	
                                        cursor: pointer;	
                                        line-height: normal;	
                                    }	
                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
                                        display: flex;	
                                        align-items: center;	
                                    }	
                                    .apexcharts-legend-text {	
                                        position: relative;	
                                        font-size: 14px;	
                                    }	
                                    .apexcharts-legend-text *, .apexcharts-legend-marker * {	
                                        pointer-events: none;	
                                    }	
                                    .apexcharts-legend-marker {	
                                        position: relative;	
                                        display: inline-block;	
                                        cursor: pointer;	
                                        margin-right: 3px;	
                                        border-style: solid;
                                    }	
                                        
                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
                                        display: inline-block;	
                                    }	
                                    .apexcharts-legend-series.apexcharts-no-click {	
                                        cursor: auto;	
                                    }	
                                    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
                                        display: none !important;	
                                    }	
                                    .apexcharts-inactive-legend {	
                                        opacity: 0.45;	
                                    }
                                </style>
                                </foreignObject>
                                <g id="SvgjsG1104" class="apexcharts-inner apexcharts-graphical" transform="translate(53.5, -10)"><defs id="SvgjsDefs1103"><clipPath id="gridRectMasknggkfjfn"><rect id="SvgjsRect1106" width="247" height="265" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknggkfjfn"></clipPath><clipPath id="nonForecastMasknggkfjfn"></clipPath><clipPath id="gridRectMarkerMasknggkfjfn"><rect id="SvgjsRect1107" width="245" height="267" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1117" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1118" flood-color="#45404a2e" flood-opacity="0.35" result="SvgjsFeFlood1118Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1119" in="SvgjsFeFlood1118Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1119Out"></feComposite><feOffset id="SvgjsFeOffset1120" dx="0" dy="5" result="SvgjsFeOffset1120Out" in="SvgjsFeComposite1119Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1121" stdDeviation="5 " result="SvgjsFeGaussianBlur1121Out" in="SvgjsFeOffset1120Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1122" result="SvgjsFeMerge1122Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1123" in="SvgjsFeGaussianBlur1121Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1124" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1125" in="SourceGraphic" in2="SvgjsFeMerge1122Out" mode="normal" result="SvgjsFeBlend1125Out"></feBlend></filter><filter id="SvgjsFilter1128" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1129" flood-color="#45404a2e" flood-opacity="0.35" result="SvgjsFeFlood1129Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1130" in="SvgjsFeFlood1129Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1130Out"></feComposite><feOffset id="SvgjsFeOffset1131" dx="0" dy="5" result="SvgjsFeOffset1131Out" in="SvgjsFeComposite1130Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1132" stdDeviation="5 " result="SvgjsFeGaussianBlur1132Out" in="SvgjsFeOffset1131Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1133" result="SvgjsFeMerge1133Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1134" in="SvgjsFeGaussianBlur1132Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1135" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1136" in="SourceGraphic" in2="SvgjsFeMerge1133Out" mode="normal" result="SvgjsFeBlend1136Out"></feBlend></filter><filter id="SvgjsFilter1139" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1140" flood-color="#45404a2e" flood-opacity="0.35" result="SvgjsFeFlood1140Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1141" in="SvgjsFeFlood1140Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1141Out"></feComposite><feOffset id="SvgjsFeOffset1142" dx="0" dy="5" result="SvgjsFeOffset1142Out" in="SvgjsFeComposite1141Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1143" stdDeviation="5 " result="SvgjsFeGaussianBlur1143Out" in="SvgjsFeOffset1142Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1144" result="SvgjsFeMerge1144Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1145" in="SvgjsFeGaussianBlur1143Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1146" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1147" in="SourceGraphic" in2="SvgjsFeMerge1144Out" mode="normal" result="SvgjsFeBlend1147Out"></feBlend></filter></defs><g id="SvgjsG1108" class="apexcharts-radialbar"><g id="SvgjsG1109"><g id="SvgjsG1110"><g id="SvgjsG1115" class="apexcharts-series apexcharts-radial-series" seriesName="Completed" rel="1" data:realIndex="0"><path id="SvgjsPath1116" d="M 120.5 28.16920731707316 A 92.33079268292684 92.33079268292684 0 1 1 101.3033487787487 210.81314333665532" fill="none" fill-opacity="0.85" stroke="rgba(42,118,244,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.820121951219514" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="192" data:value="71" filter="url(#SvgjsFilter1117)" index="0" j="0" data:pathOrig="M 120.5 28.16920731707316 A 92.33079268292684 92.33079268292684 0 1 1 101.3033487787487 210.81314333665532"></path></g><g id="SvgjsG1126" class="apexcharts-series apexcharts-radial-series" seriesName="Active" rel="2" data:realIndex="1"><path id="SvgjsPath1127" d="M 120.5 41.98932926829268 A 78.51067073170732 78.51067073170732 0 0 1 134.13323489996938 197.81791723077401" fill="none" fill-opacity="0.85" stroke="rgba(42, 118, 244, .5)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.820121951219514" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-1" data:angle="170" data:value="63" filter="url(#SvgjsFilter1128)" index="0" j="1" data:pathOrig="M 120.5 41.98932926829268 A 78.51067073170732 78.51067073170732 0 0 1 134.13323489996938 197.81791723077401"></path></g><g id="SvgjsG1137" class="apexcharts-series apexcharts-radial-series" seriesName="Assigned" rel="3" data:realIndex="2"><path id="SvgjsPath1138" d="M 120.5 55.8094512195122 A 64.6905487804878 64.6905487804878 0 1 1 55.8094512195122 120.50000000000001" fill="none" fill-opacity="0.85" stroke="rgba(42, 118, 244, .18)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.820121951219514" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-2" data:angle="270" data:value="100" filter="url(#SvgjsFilter1139)" index="0" j="2" data:pathOrig="M 120.5 55.8094512195122 A 64.6905487804878 64.6905487804878 0 1 1 55.8094512195122 120.50000000000001"></path></g><circle id="SvgjsCircle1111" r="55.41278963414635" cx="120.5" cy="120.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1112" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 0;"><text id="SvgjsText1113" font-family="Helvetica, Arial, sans-serif" x="120.5" y="120.5" text-anchor="middle" dominant-baseline="auto" font-size="18px" font-weight="600" fill="#2a76f4" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;"></text><text id="SvgjsText1114" font-family="Helvetica, Arial, sans-serif" x="120.5" y="152.5" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#50649c" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;"></text></g></g></g></g><line id="SvgjsLine1148" x1="0" y1="0" x2="241" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1149" x1="0" y1="0" x2="241" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1105" class="apexcharts-annotations"></g></svg></div></div>
                            <h6 class="text-primary bg-soft-primary p-3 mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar align-self-center icon-xs me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                01 January 2021 to 31 June 2021
                            </h6>
                        </div>                                     
                    </div><!--end card-body--> 
                </div><!--end card-->                             
            </div> <!--end col-->                  
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="project-task-content">
                    <div class="project-task-content-col">
                        <div class="project-task-content-inner">                                        
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-uppercase font-15 font-weight-semibold mb-1">Backlog</h5>
                                    <h6 class="m-0">3 Issues - <span class="text-muted">20 Points</span></h6>
                                </div><!--End Col-->
                                <div class="col-auto">
                                    <div class="project-task-add-btn mt-2 me-2">
                                        <button type="button" class="btn btn-soft-primary btn-icon-square-sm">
                                            <i class="ti ti-plus"></i>
                                        </button>
                                    </div>
                                </div><!--End Col-->
                            </div><!--End Row-->
                            <div class="progress mt-2 me-1 border-radius-tl-bl bg-pink" style="height: 2px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="project-task-box" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -20px -20px -20px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 20px 20px 20px 0px;">
                                <div class="project-task-card mb-3">
                                    <div class="card-body">
                                        <div class="dropdown d-inline-block float-end">
                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div><!--end dropdown-->
                                        <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                        <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                        <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                        <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <hr class="hr-dashed">
                                        <div class="row justify-content-center">
                                            <div class="col-6 align-self-center">
                                                <ul class="list-inline mb-0">                                                                    
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>                                                                               
                                                    </li>
                                                </ul>
                                            </div><!--end col-->
                                            <div class="col-6 align-self-center">
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--End project-task-card--> 
                                <div class="project-task-card mb-3">
                                    <div class="card-body">
                                        <div class="dropdown d-inline-block float-end">
                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div><!--end dropdown-->
                                        <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                        <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                        <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                        <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <hr class="hr-dashed">
                                        <div class="row justify-content-center">
                                            <div class="col-6 align-self-center">
                                                <ul class="list-inline mb-0">                                                                    
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>                                                                               
                                                    </li>
                                                </ul>
                                            </div><!--end col-->
                                            <div class="col-6 align-self-center">
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--End project-task-card-->                     
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 459px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div><!--End project-task-box-->                                                
                        </div><!--End project-task-content-inner-->
                    </div><!--End project-task-content-Col-->
                    <div class="project-task-content-col">
                        <div class="project-task-content-inner">                                        
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-uppercase font-15 font-weight-semibold mb-1">Todo</h5>
                                    <h6 class="m-0">3 Issues - <span class="text-muted">20 Points</span></h6>
                                </div><!--End Col-->
                                <div class="col-auto">
                                    <div class="project-task-add-btn mt-2 me-2">
                                        <button type="button" class="btn btn-soft-primary btn-icon-square-sm">
                                            <i class="ti ti-plus"></i>
                                        </button>
                                    </div>
                                </div><!--End Col-->
                            </div><!--End Row-->
                            <div class="progress me-1 mt-2 bg-warning" style="height: 2px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="project-task-box" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -20px -20px -20px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 20px 20px 20px 0px;">
                                <div class="project-task-card mb-3">
                                    <div class="card-body">
                                        <div class="dropdown d-inline-block float-end">
                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div><!--end dropdown-->
                                        <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                        <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                        <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                        <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <hr class="hr-dashed">
                                        <div class="row justify-content-center">
                                            <div class="col-6 align-self-center">
                                                <ul class="list-inline mb-0">                                                                    
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>                                                                               
                                                    </li>
                                                </ul>
                                            </div><!--end col-->
                                            <div class="col-6 align-self-center">
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--End project-task-card--> 
                                <div class="project-task-card mb-3">
                                    <div class="card-body">
                                        <div class="dropdown d-inline-block float-end">
                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div><!--end dropdown-->
                                        <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                        <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                        <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                        <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <hr class="hr-dashed">
                                        <div class="row justify-content-center">
                                            <div class="col-6 align-self-center">
                                                <ul class="list-inline mb-0">                                                                    
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>                                                                               
                                                    </li>
                                                </ul>
                                            </div><!--end col-->
                                            <div class="col-6 align-self-center">
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--End project-task-card--> 
                                <div class="project-task-card mb-3">
                                    <div class="card-body">
                                        <div class="dropdown d-inline-block float-end">
                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div><!--end dropdown-->
                                        <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                        <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                        <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                        <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <hr class="hr-dashed">
                                        <div class="row justify-content-center">
                                            <div class="col-6 align-self-center">
                                                <ul class="list-inline mb-0">                                                                    
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>                                                                               
                                                    </li>
                                                </ul>
                                            </div><!--end col-->
                                            <div class="col-6 align-self-center">
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--End project-task-card-->                           
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 668px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div><!--End project-task-box-->                                                
                        </div><!--End project-task-content-inner-->
                    </div><!--End project-task-content-Col-->
                    <div class="project-task-content-col">
                        <div class="project-task-content-inner">
                            
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-uppercase font-15 font-weight-semibold mb-1">In Progress</h5>
                                    <h6 class="m-0">3 Issues - <span class="text-muted">20 Points</span></h6>
                                </div><!--End Col-->
                                <div class="col-auto">
                                    <div class="project-task-add-btn mt-2 me-2">
                                        <button type="button" class="btn btn-soft-primary btn-icon-square-sm">
                                            <i class="ti ti-plus"></i>
                                        </button>
                                    </div>
                                </div><!--End Col-->
                            </div><!--End Row-->
                            <div class="progress me-1 mt-2 bg-success" style="height: 2px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="project-task-box" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -20px -20px -20px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 20px 20px 20px 0px;">
                                <div class="project-task-card mb-3">
                                    <div class="card-body">
                                        <div class="dropdown d-inline-block float-end">
                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div><!--end dropdown-->
                                        <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                        <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                        <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                        <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <hr class="hr-dashed">
                                        <div class="row justify-content-center">
                                            <div class="col-6 align-self-center">
                                                <ul class="list-inline mb-0">                                                                    
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>                                                                               
                                                    </li>
                                                </ul>
                                            </div><!--end col-->
                                            <div class="col-6 align-self-center">
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--End project-task-card-->                           
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 249px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div><!--End project-task-box-->                                                
                        </div><!--End project-task-content-inner-->
                    </div><!--End project-task-content-Col-->
                    <div class="project-task-content-col">
                        <div class="project-task-content-inner">
                            
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-uppercase font-15 font-weight-semibold mb-1">Testing</h5>
                                    <h6 class="m-0">3 Issues - <span class="text-muted">20 Points</span></h6>
                                </div><!--End Col-->
                                <div class="col-auto">
                                    <div class="project-task-add-btn mt-2 me-2">
                                        <button type="button" class="btn btn-soft-primary btn-icon-square-sm">
                                            <i class="ti ti-plus"></i>
                                        </button>
                                    </div>
                                </div><!--End Col-->
                            </div><!--End Row-->
                            <div class="progress me-1 mt-2 bg-primary" style="height: 2px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="project-task-box" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -20px -20px -20px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 20px 20px 20px 0px;">
                                <div class="project-task-card mb-3">
                                    <div class="card-body">
                                        <div class="dropdown d-inline-block float-end">
                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div><!--end dropdown-->
                                        <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                        <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                        <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                        <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <hr class="hr-dashed">
                                        <div class="row justify-content-center">
                                            <div class="col-6 align-self-center">
                                                <ul class="list-inline mb-0">                                                                    
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>                                                                               
                                                    </li>
                                                </ul>
                                            </div><!--end col-->
                                            <div class="col-6 align-self-center">
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--End project-task-card--> 
                                <div class="project-task-card mb-3">
                                    <div class="card-body">
                                        <div class="dropdown d-inline-block float-end">
                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div><!--end dropdown-->
                                        <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                        <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                        <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                        <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <hr class="hr-dashed">
                                        <div class="row justify-content-center">
                                            <div class="col-6 align-self-center">
                                                <ul class="list-inline mb-0">                                                                    
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>                                                                               
                                                    </li>
                                                </ul>
                                            </div><!--end col-->
                                            <div class="col-6 align-self-center">
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--End project-task-card-->                           
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 459px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div><!--End project-task-box-->                                                
                        </div><!--End project-task-content-inner-->
                    </div><!--End project-task-content-Col-->
                    <div class="project-task-content-col">
                        <div class="project-task-content-inner">
                            
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-uppercase font-15 font-weight-semibold mb-1">Done</h5>
                                    <h6 class="m-0">3 Issues - <span class="text-muted">20 Points</span></h6>
                                </div><!--End Col-->
                                <div class="col-auto">
                                    <div class="project-task-add-btn mt-2 me-2">
                                        <button type="button" class="btn btn-soft-primary btn-icon-square-sm">
                                            <i class="ti ti-plus"></i>
                                        </button>
                                    </div>
                                </div><!--End Col-->
                            </div><!--End Row-->
                            <div class="progress me-1 mt-2  border-radius-tr-br bg-danger" style="height: 2px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="project-task-box" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -20px -20px -20px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 20px 20px 20px 0px;">
                                <div class="project-task-card mb-3">
                                    <div class="card-body">
                                        <div class="dropdown d-inline-block float-end">
                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div><!--end dropdown-->
                                        <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                        <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                        <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                        <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        <hr class="hr-dashed">
                                        <div class="row justify-content-center">
                                            <div class="col-6 align-self-center">
                                                <ul class="list-inline mb-0">                                                                    
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>                                                                               
                                                    </li>
                                                </ul>
                                            </div><!--end col-->
                                            <div class="col-6 align-self-center">
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                                <a class="float-end" href="#">
                                                    <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                </a>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--End project-task-card-->                           
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 249px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div><!--End project-task-box-->                                                
                        </div><!--End project-task-content-inner-->
                    </div><!--End project-task-content-Col-->
                </div><!--End project-task-content-->
            </div><!--End Col-->
        </div><!--end row-->                   

    </div><!-- container -->

    <!--Start Rightbar-->
    <!--Start Rightbar/offcanvas-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel" aria-hidden="true" style="visibility: hidden;">
        <div class="offcanvas-header border-bottom">
            <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
            <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">  
            <h6>Account Settings</h6>
            <div class="p-2 text-start mt-3">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch1">
                    <label class="form-check-label" for="settings-switch1">Auto updates</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch2" checked="">
                    <label class="form-check-label" for="settings-switch2">Location Permission</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="settings-switch3">
                    <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                </div><!--end form-switch-->
            </div><!--end /div-->
            <h6>General Settings</h6>
            <div class="p-2 text-start mt-3">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch4">
                    <label class="form-check-label" for="settings-switch4">Show me Online</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch5" checked="">
                    <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="settings-switch6">
                    <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                </div><!--end form-switch-->
            </div><!--end /div-->               
        </div><!--end offcanvas-body-->
    </div>
    <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->
        
    
</div>
<!-- end page content -->
       

     
    

  <!-- end page content -->
</div>

@endsection
