<div class="table-responsive">
    <table style="width: 100%; border: 1px solid #dddddd; border-collapse: collapse"   class="table table-hover table-striped">
        <thead>
        <tr style="background: #f9f9f9">
            <th style="padding: 8px; border: 1px solid #dddddd">Наименование</th>
            <th style="padding: 8px; border: 1px solid #dddddd">Кол-во</th>
            <th style="padding: 8px; border: 1px solid #dddddd">Цена</th>
            <th style="padding: 8px; border: 1px solid #dddddd">Сумма</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($session['cart'] as $id=>$item):?>
            <tr>
                <td style="padding: 8px; border: 1px solid #dddddd"><?=$item['name']?></td>
                <td style="padding: 8px; border: 1px solid #dddddd"><?=$item['qty']?></td>
                <td style="padding: 8px; border: 1px solid #dddddd"><?=$item['price']?></td>
                <td style="padding: 8px; border: 1px solid #dddddd"><?=$item['qty']*$item['price']?></td>
            </tr>
        <?php endforeach?>
        <tr>
            <td colspan="3" style="padding: 8px; border: 1px solid #dddddd">ИТОГО:</td>
            <td style="padding: 8px; border: 1px solid #dddddd"><?=$session['cart.qty']?></td>
        </tr>
        <tr>
            <td colspan="3" style="padding: 8px; border: 1px solid #dddddd">На сумму:</td>
            <td style="padding: 8px; border: 1px solid #dddddd"><?=$session['cart.sum']?></td>
        </tr>
        </tr>
        </tbody>
    </table>
</div>
