<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Announcement
 *
 * @property int $id
 * @property string $title タイトル
 * @property string $description 説明
 * @property \Illuminate\Support\Carbon $date 日
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereUpdatedAt($value)
 */
	class Announcement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Questionnaire
 *
 * @property int $id
 * @property int $user_id
 * @property string $uuid URL用UUID
 * @property string $title アンケートタイトル
 * @property string|null $description アンケート説明文章
 * @property string|null $evaluation_title 「評価」に値する名前
 * @property string|null $impression_title 「感想」に値する名前
 * @property string|null $evaluation_emoji 5段階で使いたい絵文字
 * @property string|null $good_name 良いに該当する名前
 * @property string|null $bad_name 悪いに該当する名前
 * @property string|null $after_answering アンケート送信後の感謝コメント
 * @property int $is_open 公開中か？
 * @property int|null $pass 鍵
 * @property \Illuminate\Support\Carbon|null $open_at 公開開始時刻
 * @property \Illuminate\Support\Carbon|null $close_at 公開終了時刻
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\QuestionnaireFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire query()
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereAfterAnswering($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereBadName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereCloseAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereEvaluationEmoji($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereEvaluationTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereGoodName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereImpressionTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereOpenAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire wherePass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereUuid($value)
 */
	class Questionnaire extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReleaseNote
 *
 * @property int $id
 * @property \App\Enums\ReleaseNoteGenre $genre リリースノートジャンルEnum
 * @property string $title タイトル
 * @property string $description 説明
 * @property \Illuminate\Support\Carbon $date 日
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ReleaseNote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReleaseNote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReleaseNote query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReleaseNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReleaseNote whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReleaseNote whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReleaseNote whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReleaseNote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReleaseNote whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReleaseNote whereUpdatedAt($value)
 */
	class ReleaseNote extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Respondent
 *
 * @property int $id
 * @property int $questionnaire_id
 * @property int $evaluation 5段階評価
 * @property string $impression アンケート文章
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\RespondentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Respondent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Respondent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Respondent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Respondent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Respondent whereEvaluation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Respondent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Respondent whereImpression($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Respondent whereQuestionnaireId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Respondent whereUpdatedAt($value)
 */
	class Respondent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Statistic
 *
 * @property int $id
 * @property int $questionnaire_id
 * @property mixed $popular_words 人気の単語をjsonで収納
 * @property int $number_of_responses 回答数
 * @property mixed $distribution_of_evaluations 評価の分散
 * @property int $emotion 感情数値化
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\StatisticFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic query()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereDistributionOfEvaluations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereEmotion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereNumberOfResponses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic wherePopularWords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereQuestionnaireId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereUpdatedAt($value)
 */
	class Statistic extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Template
 *
 * @method static \Database\Factories\TemplateFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Template newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Template newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Template query()
 */
	class Template extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property int $login_provider ソーシャル認証のサービス名Enum
 * @property string|null $google_id googleのid
 * @property string|null $google_token googleのトークン
 * @property string|null $profile_photo_path googleから取得したアイコンurl
 * @property string|null $google_refresh_token googleのリフレッシュトークン
 * @property string|null $api_token 同時に生成するapi_token
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereApiToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogleRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogleToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLoginProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

