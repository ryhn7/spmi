<?php

namespace App\Http\Controllers;

use App\Models\kepuasan_dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilSurveiKepuasanDosenController extends Controller
{
    //
    public function index()
    {
        $categories = ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'];
        $columns = range(1, 42);
        $results = [];  

        foreach ($categories as $category) {
            $averages = [];
            $total = [];

            foreach ($columns as $column) {
                $totalCategory = kepuasan_dosen::where("$column", $category)
                    ->count();
                //count totalCategory data in each column
                $totalData = kepuasan_dosen::count();
                $average = $totalCategory / $totalData;

                $averages["$column"] = $average * 100;
                $total["$column"] = $totalCategory;
            }

            $results[] = [
                'Category' => $category,
                'Averages' => $averages,
                'Total' => $total,
            ];

        }

        return view('hasil_survei.hasil_survei_dosen', compact('results'));
    }

    // public function executeSql(Request $request)
    // {
    //     // The SQL code
    //     $sql = "
    //     DELIMITER //
    //     BEGIN
    //         DECLARE counter INT DEFAULT 1;
    //         DECLARE max_columns INT DEFAULT 45; -- Change this to the actual maximum column number

    //         -- Create a temporary table to hold the results
    //         CREATE TEMPORARY TABLE ResultTable AS
    //         SELECT 'Sangat Baik' AS Category;

    //         WHILE counter <= max_columns DO
    //             SET @sql = CONCAT(
    //                 'AVG(IF(`', counter, '` = ''Sangat Baik'', 1, 0)) * 100 AS `', counter, '`, '
    //             );
    //             SET counter = counter + 1;
    //             PREPARE dynamic_sql FROM @sql;
    //             EXECUTE dynamic_sql;
    //             DEALLOCATE PREPARE dynamic_sql;
    //         END WHILE;

    //         -- UNION for 'Baik'
    //         INSERT INTO ResultTable
    //         SELECT 'Baik' AS Category;

    //         SET counter = 1; -- Reset counter for 'Baik' category
    //         WHILE counter <= max_columns DO
    //             SET @sql = CONCAT(
    //                 'AVG(IF(`', counter, '` = ''Baik'', 1, 0)) * 100 AS `', counter, '`, '
    //             );
    //             SET counter = counter + 1;
    //             PREPARE dynamic_sql FROM @sql;
    //             EXECUTE dynamic_sql;
    //             DEALLOCATE PREPARE dynamic_sql;
    //         END WHILE;

    //         -- UNION for 'Cukup'
    //         INSERT INTO ResultTable
    //         SELECT 'Cukup' AS Category;

    //         SET counter = 1; -- Reset counter for 'Cukup' category
    //         WHILE counter <= max_columns DO
    //             SET @sql = CONCAT(
    //                 'AVG(IF(`', counter, '` = ''Cukup'', 1, 0)) * 100 AS `', counter, '`, '
    //             );
    //             SET counter = counter + 1;
    //             PREPARE dynamic_sql FROM @sql;
    //             EXECUTE dynamic_sql;
    //             DEALLOCATE PREPARE dynamic_sql;
    //         END WHILE;

    //         -- UNION for 'Kurang Sekali'
    //         INSERT INTO ResultTable
    //         SELECT 'Kurang Sekali' AS Category;

    //         SET counter = 1; -- Reset counter for 'Kurang Sekali' category
    //         WHILE counter <= max_columns DO
    //             SET @sql = CONCAT(
    //                 'AVG(IF(`', counter, '` = ''Kurang Sekali'', 1, 0)) * 100 AS `', counter, '`, '
    //             );
    //             SET counter = counter + 1;
    //             PREPARE dynamic_sql FROM @sql;
    //             EXECUTE dynamic_sql;
    //             DEALLOCATE PREPARE dynamic_sql;
    //         END WHILE; 
    //         -- Continue with similar UNION queries for 'Cukup' and 'Kurang Sekali'

    //         -- Drop the temporary table if it exists
    //         DROP TEMPORARY TABLE IF EXISTS ResultTable;

    //         -- Rename the temporary table to the final result table
    //         RENAME TABLE ResultTable TO result_table;
    //     END //
    //     DELIMITER ;

    //     ";

    //     // Execute the SQL query
    //     DB::statement($sql);

    //     // Fetch the result from the temporary table
    //     $results = DB::table('result_table')->get();

    //     // Pass the results to the Blade view for rendering
    //     return view('hasil_survei.hasil_survei_dosen', ['results' => $results]);
    // }

}
