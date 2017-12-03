<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class FundraisersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create default list of fundraisers.
        $admin_email = config('booster.admin_email');
        $admin_user_id = DB::table('users')->where('email', $admin_email)->value('id');
        $current_timestamp = Carbon::now()->format('Y-m-d H:i:s');
        DB::table('fundraisers')->insert([
          ["name" => "Boosterthon Fun Run","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Crowdfunding","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Matching Gifts","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Double the Donation","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Cookbook","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Art Auction","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Bingo","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Matching Gifts","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Volunteer Grants","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Amazon","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Discount Cards","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Carnival","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Field Day","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Giving Kiosks","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Crowdfunding","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Ebates","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Popcorn Sales","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Comedy Night","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Post It Note Challenge","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Peer-to-Peer Fundraising","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Community Grants","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "GoodSearch","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Flower Bulb Fundraiser","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Chili Cook-Off","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Pick an Egg","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Shoe Drive","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Team Volunteer Grants","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Online Auction","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "School Calendars","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Karaoke Night","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Relay Race","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Online Donations","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "In-Kind Donations","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Qmee","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Yankee Candle Sale","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Box Tops","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Hat Day","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Hike Day","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Book Sale","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Balloon Raffle","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Bottle & Can Drive","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Handmade Cards","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Hula Hoop Contest","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "School Dance","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Wealth Screening","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Jellybean Count","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Car Decals","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Penny Wars","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Pajama Day","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Serve-a-thon","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Engraved Bricks","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "LemonAID Stand","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Cell Phone Recycling","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Principal Challenge","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Spelling Bee","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Talent Show","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Photography Contest","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Make a Snake","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Fish Tank Fundraiser","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Scavenger Hunt","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Spinners","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Teachers in Jail","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Yard Sale","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "No Uniform Day","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Read-a-thon","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Parents' Party","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
          ["name" => "Straw Draw","created_at" => $current_timestamp,"updated_at" => $current_timestamp,"user_id" => $admin_user_id],
        ]);
    }
}
