namespace user_information\biodata;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class BiodataController extends Controller
{

    public function index($timezone)
    {
        echo "Ravindra Miyani"; //Carbon::now($timezone)->toDateTimeString();
    }

}