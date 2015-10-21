<style>
    .button{
        height: 30px;
        width: 90px;
        display: table-cell;
        background-color: #dd4444;
        color: white;
        margin-right: 15px;
        text-align: center;
        vertical-align: middle;
        border: 1px solid black;
    }
</style>
<?php
    require_once 'vendor/autoload.php';

    use Devices\Device;
    use Devices\MobileTelefone;
    use Devices\Tv;
    use Devices\Printer;

    $dev = new Device();
    $dev->parametrListOfDevices['Brand'] = "Samsung";
    $dev->parametrListOfDevices['model'] = "XD-101";
    echo 'Device: '.$dev->parametrListOfDevices['Brand'].' '.$dev->parametrListOfDevices['model']."<br>\n";

    $mob = new MobileTelefone();
    $mob->parametrListOfMobiles['Brand'] = "Nokia";
    $mob->parametrListOfMobiles['model'] = "Lumia 900";
    echo 'Mobile telephone: '.$mob->parametrListOfMobiles['Brand'].' '.$mob->parametrListOfMobiles['model']."<br>\n";

    $tv = new Tv();
    $tv->parametrListOfTv['Brand'] = "Philips";
    $tv->parametrListOfTv['model'] = "B-350";
    echo 'TV: '.$tv->parametrListOfTv['Brand'].' '.$tv->parametrListOfTv['model']."<br>\n";

?>
<div>
    <h5>Tv Interface</h5>
    <span class="button" onclick="document.write('<?php $tv->checkNextChanel(); ?>');">
        NEXT
    </span>
    <span class="button" onclick="document.write('<?php $tv->checkPrevChanel(); ?>');">
        PREV
    </span>
    <span class="button" onclick="document.write('<?php $tv->onTv(); ?>');">
        ON
    </span>
    <span class="button" onclick="document.write('<?php $tv->offTv(); ?>');">
        OFF
    </span>
    <span class="button" onclick="document.write('<?php $tv->upVolume(); ?>');">
        VOLUME +
    </span>
    <span class="button" onclick="document.write('<?php $tv->downVolume(); ?>');">
        VOLUME -
    </span>
</div>
<?php
    $prt = new Printer();
    $prt->parametrListOfPrinter['Brand'] = "Xerox";
    $prt->parametrListOfPrinter['model'] = "B-350";
    echo 'Printer: '.$prt->parametrListOfPrinter['Brand'].' '.$prt->parametrListOfPrinter['model']."<br>\n";