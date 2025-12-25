<!DOCTYPE html>
<html>

<body>
    <?php
    class Transaction
    {
        protected $amount;

        public function pay($amount)
        {
            $this->amount = $amount;
            return $this->amount;
        }
    }

    class JazzCash extends Transaction
    {
        public function pay($amount)
        {
            $this->amount = $amount;
            return "Transaction done of amount: " . $this->amount . " using JazzCash";
        }
    }

    $payment1 = new JazzCash();
    echo $payment1->pay(3000);
    ?>
</body>

</html>