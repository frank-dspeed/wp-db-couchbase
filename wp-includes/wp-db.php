class my_db_driver extends wpdb {

    public function some_method_i_want_to_override() {
        // Hello!
    }

}

$wpdb = new my_db_driver( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST );
