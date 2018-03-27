<?php
  $searchParams = new KalturaESearchParams();
  $searchParams->searchOperator = new KalturaESearchOperator();
  $searchParams->searchOperator->operator = KalturaESearchOperatorType::AND_OP;
  $searchParams->searchOperator->searchItems = [];
  $searchParams->searchOperator->searchItems[0] = new KalturaESearchCaptionItem();
  $searchParams->searchOperator->searchItems[0]->searchTerm = "asdf";
  $pager = new KalturaPager();

  try {
    $result = $client->getESearchService()->searchEntry($searchParams, $pager);
    var_dump($result);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>