<?php

require_once(dirname(__FILE__)."/../../Lib/CardsHelper.php");
$helper = new CardsHelper();

?>

<link type="text/css" rel="stylesheet" href="https://jira.ecom.migros.net/s/c7e1249ffc03eb9ded908c236bd1996d-CDN/en_US-4qbmen/6345/87/37/_/download/superbatch/css/batch.css" media="all">
<style>
    a {
        color: black !important;
        font-size: 40px;
        line-height: 100px;
    }
    #printable-content {
        padding: 0;
    }
    #issuetable {
        margin: 0;
    }
    .issuekey {
    	position: relative;
    }
    .issuekey .issue-link {
        font-weight: bold;
    }
    .summary .issue-link {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
        width: 750px;
    }
    div.epic, div.label {
        float: left;
        max-width: 100%;
        border-width: 1px;
        border-style: solid;
        margin-top: 0;
    }
    div.information {
        max-width: 100%;
        display: block;
        left: 10px;
        float:none;
        position: absolute;
        top: 18px;
        font-size: 10px;
    }
</style>

<div id="jira" class="aui-layout aui-theme-default page-type-printable">
    <div id="printable-content">
        <table id="issuetable">
            <tbody>
            	<?php foreach( $tickets as $ticket ) { ?>
                <tr id="issuerow21657" rel="21657" data-issuekey="MREL-3261" class="issuerow">
                    <td class="issuekey">
                        <div class="information">
                            <?php if( isset($ticket['epic']) ) { ?>
                            <div class="epic epicgroup_<?php echo $helper->getEpicNumber($ticket['epickey']); ?>"><?php echo $ticket["epic"] ?></div>
                            <?php } ?>
                            <?php if( isset($ticket['labels']) ) {
                            foreach( $ticket["labels"] as $label ) { ?>
                            <div class="label"><?php echo $label ?></div>
                            <?php }
                            } ?>
                        </div>
                        <a class="issue-link" data-issue-key="MREL-3261" href="https://jira.ecom.migros.net/browse/<?php echo $ticket['key'] ?>"><?php echo $ticket['key'] ?></a>
                    </td>
                    <td class="summary">
                        <p>
                            <a class="issue-link" data-issue-key="MREL-3261" href="https://jira.ecom.migros.net/browse/<?php echo $ticket['key'] ?>"><?php echo $ticket['summary'] ?></a>
                        </p>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

