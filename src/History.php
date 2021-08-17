<?php

namespace DBLaci\Data;

trait History
{
    /**
     * Ignore key list.
     *
     * @return array
     */
    protected function getHistoryIgnoreKeys(): array
    {
        return [];
    }

    /**
     * Log changes to history.
     *
     * @param array $changeList
     */
    protected function logChangesToHistory(array $changeList)
    {
        if (count($changeList) === 0) {
            return;
        }

        $ignoreKeys = $this->getHistoryIgnoreKeys();

        $filteredChangeList = [];
        foreach ($changeList as $col => $values) {
            if (in_array($col, $ignoreKeys)) {
                continue;
            }

            $filteredChangeList[$col] = $values;
        }

        $this->saveToHistory($filteredChangeList);
    }

    /**
     * Save changes to history.
     */
    abstract protected function saveToHistory(array $changeList): void;
}