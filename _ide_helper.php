<?php

namespace Illuminate\Foundation\Testing {

    class TestResponse
    {
        /**
         * Asserts that the response contains an error from a given category.
         *
         * @param string $category the name of the expected error category
         *
         * @return $this
         */
        public function assertGraphQLErrorCategory(string $category): self
        {
            return $this;
        }
    }
}

namespace Illuminate\Testing {

    class TestResponse
    {
        /**
         * Assert the response contains an error from the given category.
         *
         * @param string $category the name of the expected error category
         *
         * @return $this
         */
        public function assertGraphQLErrorCategory(string $category): self
        {
            return $this;
        }
    }
}