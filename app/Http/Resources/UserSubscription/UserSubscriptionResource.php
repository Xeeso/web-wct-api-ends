<?php

namespace App\Http\Resources\UserSubscription;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserSubscriptionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'subscription_plan_id' => $this->subscription_plan_id,
            'subscription_plan_name' => $this->subscriptionPlan->subscription_plan_name,
            'payment_id' => $this->payment_id,
            'subscription_start_date' => $this->subscription_start_date,
            'subscription_end_date' => $this->subscription_end_date,
            'subscription_status' => $this->subscription_status,

        ];
    }
}
