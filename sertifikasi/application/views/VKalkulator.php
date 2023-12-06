<?php echo $this->session->flashdata('message'); ?>

<form action="<?php echo base_url('/CKalkulator/hitung') ?>" method="post">
    <table border="1">
        <tr>
            <td colspan="2" align="center"> Form Kalkulator</td>
        </tr>
        <tr>
            <td>Bilangan Pertama</td>
            <td><input type="text" name="bil_pertama" value="<?php echo $tampilHasil ?>"></td>
        </tr>
        <tr>
            <td>Operator</td>
            <td>
                <select name="operator">
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="%">%</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Bilangan Kedua</td>
            <td><input type="text" name="bil_kedua"></td>
            <td><input type="hidden" name="hasil"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="hitung" value="hitung">
                <button type="reset">Reset</button>
            </td>
        </tr>
    </table>
</form>

<div class="table-responsive">
        <table border="1">
            <tr class="text">
                    <th>NO</th>
                    <th>Bilangan Pertama</th>
                    <th>Operator</th>
                    <th>Bilangan Kedua</th>
                    <th>Hasil</th>
            </tr>

            <?php
            $no = 1;
            foreach ($perhitungan as $klk) :
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $klk->bil_pertama ?></td>
                    <td><?php echo $klk->operator ?></td>
                    <td><?php echo $klk->bil_kedua ?></td>
                    <td><?php echo $klk->hasil ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>