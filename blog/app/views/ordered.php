<div class="container">
    <div class="content_text">
        <div class="container_table">
            <table class="table table-hover table-condensed">
                <thead>
                    <tr class="tr tr_first">
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th style="width:100px;">Số lượng</th>
                      
                        <th>Thành tiền</th>
                        <th style="width:100px;">Xử lý</th>
                        <th style="width:50px; text-align:center;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if (!empty($ordered)) :
                        $total = 0;
                        foreach ($ordered as $key => $value) :
                            $total += ($value['price_product'] * $value['cart_quantity']);
                    ?>
                            <form action='./gio-hang/' method="post">
                               <!-- Bổ sung code tại đây -->
                            </form>
                        <?php endforeach ?>
                        <tr>
                            <td colspan="7" class="textright_text">
                                <div class="sum_price_all">
                                    <span class="text_price">Tổng tiền thành toán</span>:
                                    <span class="text_price color_red"><?php echo number_format($total, 0, '.', ',') ?> đ</span>
                                </div>
                            </td>

                        </tr>
                        
                        <tr>
                        <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</div>