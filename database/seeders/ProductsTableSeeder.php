use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Your seeder logic here
        DB::table('products')->insert([
            'name' => 'Product Name',
            'description' => 'Product Description',
            // Add more fields and data as needed
        ]);
    }
}
