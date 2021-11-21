<h1>this is the main page
    <?php
    if(DB::connection()->getPdo())
    {
        echo "Successfully connected to the database => "
                     .DB::connection()->getDatabaseName();
    }
?>
</h1>
{{ DB::table('Event')->get() }}
