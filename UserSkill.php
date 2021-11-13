<?php


class UserSkill
{
    public function __construct(private int $user_id = 0, private int $skill_id = 0)
    {
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return int
     */
    public function getSkillId(): int
    {
        return $this->skill_id;
    }

    /**
     * @param int $skill_id
     */
    public function setSkillId(int $skill_id): void
    {
        $this->skill_id = $skill_id;
    }
}