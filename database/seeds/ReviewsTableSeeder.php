<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Much of this should probably go in the factory class instead.
      $records = [];
      $fundraisers = DB::table('fundraisers')->pluck('id');
      $reviewers = DB::table('users')->pluck('id')->all();
      $current_timestamp = Carbon::now()->format('Y-m-d H:i:s');
      $fun_run_id = DB::table('fundraisers')->where('name','=','Boosterthon Fun Run')->value('id');

      foreach ($fundraisers as $id) {
        $reviewers_for_fundraiser = [];
        $number_of_reviews = rand(1,5);
        for ($i = 1; $i <= $number_of_reviews; $i++) {
          $review = $this->generate_review();
          $review['user_id'] = $this->get_reviewer($reviewers,$reviewers_for_fundraiser);
          $reviewers_for_fundraiser[] = $review['user_id'];
          $review['fundraiser_id'] = $id;
          $review['created_at'] = $current_timestamp;
          $review['updated_at'] = $current_timestamp;

          // A little brown-nosing to make the Fun Run 5 stars!
          if ($id == $fun_run_id) $review['rating'] = 5;

          $records[] = $review;
        }
      }

      DB::table('reviews')->insert(
        $records
      );

    }

    /*
     * Return an array containing a rating and a review.
     *
     * @return array
     */
    private function generate_review()
    {
      $possible_reviews = [
        'Worked great.',
        'One of the best.',
        'Would do it again!',
        'Awesome!',
        'Could have been better.',
      ];

      $review = [
        'rating' => rand(0,5),
        'review' => $possible_reviews[rand(0,count($possible_reviews)-1)]
      ];

      return $review;
    }

    /*
     * Return id of a valid, non-duplicate reviewer.
     *
     * @var $possible_reviewer_ids
     * @var $previous_reviewer_ids
     *
     * @return integer
     */
    private function get_reviewer(array $possible_reviewer_ids, array $previous_reviewer_ids)
    {
      $available_reviewer_ids = array_values(array_diff($possible_reviewer_ids, $previous_reviewer_ids));
      $reviewer_id = array_values($available_reviewer_ids)[rand(0,count($available_reviewer_ids)-1)];

      return $reviewer_id;
    }
}
