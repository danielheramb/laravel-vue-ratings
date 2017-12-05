<template>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button @click="initAddFundraiser()" class="btn btn-primary btn-xs pull-right">
                            + Add New Fundraiser
                        </button>
                        Fundraisers
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li v-if="fundraisers.length === 0">There are no fundraisers yet!</li>
                            <li class="list-group-item" v-for="(fundraiser, index) in fundraisers">
                                <strong>{{ fundraiser.name }}</strong> <span id="rating">( {{ fundraiser.rating }} stars by {{ fundraiser.rating_count }} ratings )</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="add-fundraiser-model">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Add New Fundraiser</h4>
                    </div>
                    <div class="modal-body">

                        <div class="alert alert-danger" v-if="errors.length > 0">
                            <ul>
                                <li v-for="error in errors">{{ error }}</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" class="form-control" placeholder="Fundraiser Name" v-model="fundraiser.name">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button @click="createFundraiser" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" tabindex="-1" role="dialog" id="add-review-model">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Add New Review</h4>
                    </div>
                    <div class="modal-body">

                        <div class="alert alert-danger" v-if="review_errors.length > 0">
                            <ul>
                                <li v-for="error in review_errors">{{ error }}</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <label for="rating">Rating:</label>
                            <select id="rating" class="form-control" v-model="review.rating">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="review">Review:</label>
                            <textarea id="review" class="form-control" v-model="review.review"></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button @click="createReview" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>
</template>

<script>
    export default {
      data() {
        return {
          fundraiser: {
            id: '',
            name: '',
            rating: '',
            rating_count: '',
          },
          errors: [],
          fundraisers: [],
          reviews: [],
          review: {
            id: '',
            rating: '',
            review: '',
            user_id: '',
            fundraiser_id: '',
          }
        }
      },
      mounted() {
        this.fetchFundraisers();
      },
      methods: {
        initAddFundraiser() {
          this.errors = [];
          $("#add-fundraiser-model").modal("show");
        },
        createFundraiser() {
          axios.post('/api/fundraisers', {
            name: this.fundraiser.name,
            user_id: 1
          })
              .then(response => {
                this.reset();
                this.fundraisers.push(response.data.fundraiser);
                $("#add-fundraiser-model").modal("hide");
              })
              .catch(error => {
                this.errors = [];
                if (error.response.data.errors.name) {
                  this.errors.push(error.response.data.errors.name[0]);
                }
              });
        },
        reset() {
          this.fundraiser.name = '';
        },
        fetchFundraisers() {
          axios.get('/api/fundraisers')
              .then(response => {
                this.fundraisers = response.data.fundraisers;
              });
        }
      }
    }
</script>