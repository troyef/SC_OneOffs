<?php
require_once('SCORMCloud_PHPLibrary/ScormEngineService.php');

$ServiceUrl = 'http://cloud.scorm.com/EngineWebServices/';
$AppId = "[SCORM Cloud Application AppId]";
$SecretKey = "[SCORM Cloud Application Secret Key]";
$Origin = "TEFWorks_SC_OneOffs_reportage";

$ScormService = new ScormEngineService($ServiceUrl,$AppId,$SecretKey,$Origin);

$reportService = $ScormService->getReportingService();
$repAuth = $reportService->GetReportageAuth("freenav",true);
$reportageUrl = $reportService->GetReportageServiceUrl()."Reportage/reportage.php?appId=".$AppId;
$reportUrl = $reportService->GetReportUrl($repAuth,$reportageUrl);

header("Location: $reportUrl");

