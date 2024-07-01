<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublisherTaskPayment extends Model
{
    use HasFactory;
    protected $guarded = [];

    //protected $connection = 'mysql_main_pr'; // Default connection
    protected $table = 'publisher_task_payments'; // Your table name

    public function setCustomConnection($connection)
    {
        $this->setConnection($connection);
    }

    public function resetConnection()
    {
        $this->setConnection('mysql'); // Reset to the default connection
    }


}
